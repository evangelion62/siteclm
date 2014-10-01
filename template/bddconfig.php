<?php ob_start();?>
	<h1>Procédure d'installation du site</h1>
	<p>étape 1 - configuration de la base de données</p>
	<form role="form">
		<div class=form-group>
			<label for="host">Serveur :</label><input type="text" name="host" id="host">
		</div>
		<input type="text" name="dbname" id="dbname">
		<input type="text" name="user" id="user">
		<input type="password" name="pwd" id="pwd">
	</form>
<?php
$contents = ob_get_clean();
if (is_file('template/layout.php')){
	require_once 'template/layout.php';
}
?>