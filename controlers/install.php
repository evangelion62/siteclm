<?php

switch ($action) {
	/* étape 1 -
	 * parametrage du fichier xml si jamais paramétré*/
	case 'bddFirstConfig':
		$bddManager = new BddManager('config/bdd.config.xml');
		
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
			$templateTitle='Site Install - Base de données';
			$formAction='?controler=install&action=bddFirstConfig';
			require_once 'template/bddconfig.php';
		}
	break;
	
	/* étape 2 - 
	 * paramétrage du nom du site et de l'adresse DNS*/
	case 'siteNameConfig':
		$siteManager = new SiteManager('config/site.config.xml');
		
		if (	!empty($_POST['sitename'])
			&&	!empty($_POST['urlsite']))
		{
			$siteManager->setName($_POST['sitename']);
			$siteManager->setUrl($_POST['urlsite']);
			header('Location: ?controler=install&action=siteAdminConfig');
		} else {
			$templateTitle='Site Install - Identité';
			$formAction='?controler=install&action=siteNameConfig';
			require_once 'template/siteconfig.php';
		}
	break;
	
	/* étape 3
	 * paramétrage de l'administrateur*/
	case 'siteAdminConfig':
		$templateTitle='Site Install - Administrateur';
		$formAction='?controler=install&action=siteAdminConfig';
		require_once 'template/siteadminconfig.php';
	break;
	
	default:
		header('Location: ?controler=install&action=bddFirstConfig');
	break;
}
