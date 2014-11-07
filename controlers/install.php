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
			require_once 'template/install/bddconfig.php';
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
			require_once 'template/install/siteconfig.php';
		}
	break;
	
	/* étape 3
	 * paramétrage de l'administrateur*/
	case 'siteAdminConfig':
		$siteManager = new SiteManager('config/site.config.xml');
		
		if (	!empty($_POST['adminId'])
			&&	!empty($_POST['adminMdp'])) 
		{
			$siteManager->setAdminId($_POST['adminId']);
			$siteManager->setAdminpwd($_POST['adminMdp']);
			
			header('Location: ?controler=install&action=final');
		}else {
			$templateTitle='Site Install - Administrateur';
			$formAction='?controler=install&action=siteAdminConfig';
			require_once 'template/install/siteadminconfig.php';
		}
	break;
	
	case 'final':
		//création des tables de l'application
		$userManager = new UserManager($bdd);
		$userManager->createTable();
		$userInfoManager = new UserInfoManager($bdd);
		$userInfoManager->createTable();
		$imgManager = new ImgManager($bdd);
		$imgManager->createTable();
		$actuManager = new ActuManager($bdd);
		$actuManager->createTable();
		
		header('Location: ?controler=index');
	break;
	
	default:
		header('Location: ?controler=install&action=bddFirstConfig');
	break;
}
