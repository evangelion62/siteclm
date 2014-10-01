<?php
$bddManager = new BddManager('config/bdd.config.xml');

switch ($action) {
	/*parametrage du fichier xml si jamais paramétré*/
	case 'bddFirstConfig':
		require_once 'template/bddconfig.php';
	break;
	
	default:
		;
	break;
}
