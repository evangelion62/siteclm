<?php ob_start();?>
<h1>Ajout d'Images</h1>
<form role="form"
	action="<?php if (!empty($formAction)){echo $formAction;}?>"
	method="POST"
	enctype="multipart/form-data"
	>
	<div class="form-group">
		<label for="name">Nom de l'image</label> <input type="text"
			class="form-control" id="name" name="name" placeholder="Nom de l'image...">
	</div>
	<div class="form-group">
		<label for="img">Image à ajouter</label> <input
			type="file" id="img" name="img">
		<p class="help-block">Veullez selectionner une image à envoyer au
			serveur.</p>
	</div>
	<input type="submit" class="btn btn-default pull-right" value="Valider">
</form>
<?php
$contents = ob_get_clean ();
$ckeditor = false;
if (is_file ( 'template/layout/layout.php' )) {
	require_once 'template/layout/layout.php';
}
?>