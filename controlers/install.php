<?php
$bddManager = new BddManager('config/bdd.config.xml');

switch ($action) {
	/*parametrage du fichier xml si jamais paramétré*/
	case 'bddFirstConfig':
		require_once 'template/bddconfig.php';
	break;
	
	/*erreur dans le paramétrage de la base de données*/
	case 'bddBadConfig':
		$userErrors['bdderror']='mauvaise configuration de la base de données. veuillé verifié !';
		require_once 'template/bddconfig.php';
	break;
	
	default:
		;
	break;
}
