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
			header('Location: ?controler=install&action=siteAdminConfig');
		}
		else {
			$templateTitle='Site Install - Base de données';
			$formAction='?controler=install&action=bddFirstConfig';
			require_once 'template/install/bddconfig.php';
		}
	break;
	
	/* étape 2
	 * paramétrage de l'administrateur*/
	case 'siteAdminConfig':
		
		if (	!empty($_POST['adminId'])
			&&	!empty($_POST['adminMdp'])) 
		{
			$userManager = new UserManager($bdd);
			$donnees= array('name'=>$_POST['adminId'],'pass'=>$_POST['adminMdp']);
			$admin = new User($donnees);
			
			$userManager->add($admin);
			$admin = $userManager->get($_POST['adminId'],'name');
			$donnees= array('userid'=>$admin->id(),'adminlvl'=>'3');
			$userRights = new UserRights($donnees);
			$userRightsManager = new UserRightsManager($bdd);
			$userRightsManager->add($userRights);
			
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
		$userAuthManager = new UserAuthManager($bdd);
		$userAuthManager->createTable();
		$userRightsManager = new UserRightsManager($bdd);
		$userRightsManager->createTable();
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
