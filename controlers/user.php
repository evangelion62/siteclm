<?php

switch ($action){
	case 'addUser':
		if (	!empty($_POST['name'])
			&&	!empty($_POST['pass'])){
			$userManager = new UserManager($bdd);
			$user = new User($_POST);
			$userManager->add($user);
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
		require_once 'template/user/connectuser.php';
	break;
	
	case 'disconnectUser':
		require_once 'template/user/disconnectuser.php';
	break;
	
	default:
		
	break;
}