<?php

/*Accessible à ?controler=user&action=disconnectuser*/

ob_start();?>
<h1>Accès refusé</h1>
<span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
<p>Vous n'avez pu vous connecté, car vous ne disposez des droits suffisants. Veuillez contacter le webmaster pour toutes informations supplémentaires</p>
<?php
$contents = ob_get_clean();
if (is_file('template/layout/layout.php')){
	require_once 'template/layout/layout.php';
}
?>