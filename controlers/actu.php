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
			print_r($actu);
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
	default:
		;
	break;
}