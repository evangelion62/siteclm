<?php
/*definition des niveau d'acces de chaque action*/
$adminlvl=array('addUser'=>3,
		'listUser'=>3,
		'connectUser'=>0,
		'disconnectUser'=>0,
);

/*si utilisateur co alor comparaison*/
if (!empty($_SESSION['token']) && !empty($_SESSION['userid'])){
	$userRightsManager = new UserRightsManager($bdd);
	$userRights = $userRightsManager->get($_SESSION['userid'],'userid');

	if ($userRights->adminlvl() < $adminlvl[$action]){
		require_once 'template/user/accesdenied.php';
		exit();
	}
}else if ($adminlvl[$action] >0){
	require_once 'template/user/accesdenied.php';
	exit();
}

switch ($action){
	case 'addUser':
		if (	!empty($_POST['name'])
			&&	!empty($_POST['pass'])){
			$userManager = new UserManager($bdd);
			$user = new User($_POST);
			$userManager->add($user);
			
			$user = $userManager->get($_POST['name'],'name');
			$userRightsManager = new UserRightsManager($bdd);
			$donnees= array('userid'=>$user->id(),'adminlvl'=>'0');
			$userRights = new UserRights($donnees);
			$userRightsManager->add($userRights);
			
			header('Location: ?controler=user&action=listUser');
		}else{
			$formAction = '?controler=user&action=addUser';
			require_once 'template/user/adduser.php';
		}
	break;
	
	case 'listUser':
		$userManager = new UserManager($bdd);
		$users = $userManager->getList();
		require_once 'template/user/listuser.php';
	break;
	
	case 'updateUser':
		require_once 'template/user/updateuser.php';
	break;
	
	case 'deleteUser':
		
		require_once 'template/user/deleteuser.php';
	break;
		
	case 'connectUser':
		if (	!empty($_POST['userId']	)
			&&	!empty($_POST['userMdp']	)){
			$userManager = new UserManager($bdd);
			$user = $userManager->get($_POST['userId'],'name');
			if ($user){
				if ($_POST['userMdp']==$user->pass()){
					//auth ok => generation d'un token
					$token = md5($user->pass().$_SERVER["REMOTE_ADDR"].'abc123');
					$donnees= array('userid'=>$user->id(),'token'=>$token);
					$userAuth = new UserAuth($donnees);
					$userAuthManager = new UserAuthManager($bdd);
					if ($entity = $userAuthManager->get($user->id(),'userid')){
						$entity->setToken($token);
						$userAuthManager->update($entity);
						$_SESSION['userid']=$user->id();
						$_SESSION['token']=$token;
						
						header ( 'Location: ?controler=index' );
					}else{
						$userAuthManager->add($userAuth);
						$_SESSION['userid']=$user->id();
						$_SESSION['token']=$token;
						
						header ( 'Location: ?controler=index' );
					}
					
				}else{
					$userErrors['userPassError']="mot de passe utilisateur incorect";
					$formAction = '?controler=user&action=connectUser';
					require_once 'template/user/connectuser.php';
				}
			}else{
			//le nom d'utilisateur n'existe pas dans la base
				$userErrors['userNameError']="nom d'utilisateur incorect";
				$formAction = '?controler=user&action=connectUser';
				require_once 'template/user/connectuser.php';
			}
		}else{
			$formAction = '?controler=user&action=connectUser';
			require_once 'template/user/connectuser.php';
		}
	break;
	
	case 'disconnectUser':
		$_SESSION = array();
		header ( 'Location: ?controler=index' );
	break;
	
	default:
		
	break;
}