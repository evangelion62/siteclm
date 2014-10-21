<?php
switch ($action) {
	case 'allActu':
		require_once 'template/actu/totalactu.php';
	break;
	
	case 'addActu':
		$formAction = '?controler=actu&action=addActu';
		require_once 'template/actu/addactu.php';
	break;
	default:
		;
	break;
}