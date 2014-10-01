<?php ob_start();?>
	<h1>Procédure d'installation du site</h1>
	<p>étape 1</p>
<?php
$contents = ob_get_clean();
if (is_file('template/layout.php')){
	require_once 'template/layout.php';
}
?>