<?php
switch ($action) {
	case 'allActu':
		$actuManager = new ActuManager($bdd);
		$actus = $actuManager->getList();
		require_once 'template/actu/totalactu.php';
	break;
	
	case 'getActu':
		if (!empty($_GET['id'])){
			$actuManager = new ActuManager($bdd);
			$actu = $actuManager->get($_GET['id']);
			require_once 'template/actu/getactu.php';
		}
	break;
	
	case 'addActu':
		if (!empty($_POST['name']) && !empty($_POST['content'])){
			$actuManager = new ActuManager($bdd);
			$actu = new Actu($_POST);
			$actuManager->add($actu);
			header('Location: ?controler=actu&action=allActu');
		}else{
			$formAction = '?controler=actu&action=addActu';
			require_once 'template/actu/addactu.php';
		}
	break;
	
	case 'updateActu':
		if (!empty($_GET['id']) && empty($_POST['name']) && empty($_POST['content'])){
			$actuManager= new ActuManager($bdd);
			$actu = $actuManager->get($_GET['id']);
			$formAction = '?controler=actu&action=updateActu&id='.$_GET['id'];
			require_once 'template/actu/updateactu.php';
		}elseif (!empty($_POST['name']) && !empty($_POST['content']) && !empty($_GET['id'])){
			$actuManager = new ActuManager($bdd);
			$actu = new Actu($_POST);
			$actu->setId($_GET['id']);
			$actuManager->update($actu);
			header('Location: ?controler=actu&action=allActu');
		}
	break;
	
	case 'deletActu':
		if (!empty($_GET['id'])){
			$actuManager = new ActuManager($bdd);
			$actuManager->delete($_GET['id']);
			header('Location: ?controler=actu&action=allActu');
		}
	break;
	
	default:
		;
	break;
}