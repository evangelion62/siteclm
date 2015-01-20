<?php
/*definition des niveau d'acces de chaque action*/
$adminlvl=array('allActu'=>0,
				'getActu'=>0,
				'addActu'=>2,
				'updateActu'=>2,
				'deletActu'=>3
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

switch ($action) {
	case 'allActu' :
		if (! empty ( $_GET ['page'] )) {
			$actuManager = new ActuManager ( $bdd );
			$actus = $actuManager->getPage ( $_GET ['page'] );
			$nbActu = $actuManager->count ();
			$nbPages = $nbActu / 5;
			$pageActive = $_GET ['page'];
			require_once 'template/actu/totalactu.php';
		} else {
			$actuManager = new ActuManager ( $bdd );
			$actus = $actuManager->getPage ();
			$nbActu = $actuManager->count ();
			$nbPages = $nbActu / 5;
			$pageActive = 1;
			require_once 'template/actu/totalactu.php';
		}
		
		break;
	
	case 'getActu' :
		if (! empty ( $_GET ['id'] )) {
			$actuManager = new ActuManager ( $bdd );
			$actu = $actuManager->get ( $_GET ['id'] );
			require_once 'template/actu/getactu.php';
		}
		break;
	
	case 'addActu' :
		if (! empty ( $_POST ['name'] ) && ! empty ( $_POST ['content'] )) {
			$actuManager = new ActuManager ( $bdd );
			$actu = new Actu ( $_POST );
			if (! empty ( $_POST ['imgActu'] )) {
				echo $_POST ['imgActu'];
				$actu->setImg ( $_POST ['imgActu'] );
			}
			$actuManager->add ( $actu );
			header ( 'Location: ?controler=actu&action=allActu' );
		} else {
			$imgManager = new ImgManager ( $bdd );
			$imgs= $imgManager->getList('id',9);
			$formAction = '?controler=actu&action=addActu';
			require_once 'template/actu/addactu.php';
		}
		break;
	
	case 'updateActu' :
		if (! empty ( $_GET ['id'] ) && empty ( $_POST ['name'] ) && empty ( $_POST ['content'] )) {
			$actuManager = new ActuManager ( $bdd );
			$actu = $actuManager->get ( $_GET ['id'] );
			$imgManager = new ImgManager ( $bdd );
			if (! empty ( $_GET ['pageImg'] )) {
				$imgs = $imgManager->getPage ( $_GET ['pageImg'], 9 );
				$pageActive = $_GET ['pageImg'];
			} else {
				$imgs = $imgManager->getPage ( 1, 9 );
				$pageActive = 1;
			}
			$nbImgs = $imgManager->count ();
			$nbPages = $nbImgs / 9;
			
			$formAction = '?controler=actu&action=updateActu&id=' . $_GET ['id'];
			require_once 'template/actu/updateactu.php';
		} elseif (! empty ( $_POST ['name'] ) && ! empty ( $_POST ['content'] ) && ! empty ( $_GET ['id'] )) {
			$actuManager = new ActuManager ( $bdd );
			$actu = new Actu ( $_POST );
			$actu->setId ( $_GET ['id'] );
			if (! empty ( $_POST ['imgActu'] )) {
				echo $_POST ['imgActu'];
				$actu->setImg ( $_POST ['imgActu'] );
			}
			$actuManager->update ( $actu );
			header ( 'Location: ?controler=actu&action=allActu' );
		}
		break;
	
	case 'deletActu' :
		if (! empty ( $_GET ['id'] )) {
			$actuManager = new ActuManager ( $bdd );
			$actuManager->delete ( $_GET ['id'] );
			header ( 'Location: ?controler=actu&action=allActu' );
		}
		break;
	
	default :
		header ( 'Location: ?controler=actu&action=allActu' );
		break;
}