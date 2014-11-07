<?php

switch ($action) {
	case 'Accueil':
		
	break;
	
	default:
		$actuManager = new ActuManager($bdd);
		$actus = $actuManager->getList('id',5);
		require_once 'template/home/index.php';
	break;
}