<?php
$bddManager = new BddManager('config/bdd.config.xml');

switch ($action) {
	/*parametrage du fichier xml si jamais paramétré*/
	case 'bddFirstConfig':
		if (	!empty	($_POST['host'])
			&& 	!empty	($_POST['dbname'])
			&&	!empty	($_POST['user'])
			&&	isset	($_POST['pwd'])
			)
		{
			$bddManager->setHost($_POST['host']);
			$bddManager->setdbname($_POST['dbname']);
			$bddManager->setuser($_POST['user']);
			$bddManager->setpwd($_POST['pwd']);
			header('Location: ?controler=install&action=siteNameConfig');
		}
		else {
			$templateTitle='Site Install';
			$formAction='?controler=install&action=bddFirstConfig';
			require_once 'template/bddconfig.php';
		}
	break;
	
	/*paramétrage du nom du site et de l'adresse DNS*/
	case 'siteNameConfig':
		require_once 'template/siteconfig.php';
	break;
	
	default:
		header('Location: ?controler=install&action=bddFirstConfig');
	break;
}
