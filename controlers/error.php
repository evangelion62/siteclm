<?php

switch ($action) {
	/*erreur dans le paramétrage de la base de données*/
	case 'bddBadConfig':
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
			/*on redirige vers la page qui était demandé*/
			header ("Location: $_SERVER[HTTP_REFERER]" );
		}
		else {
			$bddLastConfig=array(
					'host'=>$bddManager->host(),
					'dbname'=>$bddManager->dbname(),
					'user'=>$bddManager->user()
			);
			$formAction='?controler=error&action=bddBadConfig';
			require_once 'template/install/bddconfig.php';
		}
		break;
	
	default:
		;
	break;
}