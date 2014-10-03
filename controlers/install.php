<?php

switch ($action) {
	/*parametrage du fichier xml si jamais paramétré*/
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
			$templateTitle='Site Install';
			$formAction='?controler=install&action=bddFirstConfig';
			require_once 'template/bddconfig.php';
		}
	break;
	
	/*paramétrage du nom du site et de l'adresse DNS*/
	case 'siteNameConfig':
		$siteManager = new SiteManager('config/site.config.xml');
		
		$siteManager->setName('test2');
		$siteManager->url('testurl2');
		$siteManager->adminId('testadminid2');
		$siteManager->adminpwd('testadminpwd');
		echo($siteManager->name().','.$siteManager->url().','.$siteManager->adminId().','.$siteManager->adminpwd());
	break;
	
	case 'siteAdminConfig':
		require_once 'template/siteadminconfig.php';
	break;
	default:
		header('Location: ?controler=install&action=bddFirstConfig');
	break;
}
