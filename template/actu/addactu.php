<?php ob_start();?>
<h1>Ajout d'Actualité</h1>
<form role="form"
	action="<?php if (!empty($formAction)){echo $formAction;}?>"
	method="POST"
	enctype="multipart/form-data"
	>
	<div class="form-group">
		<label for="name">Titre de l'Actualité</label> <input type="text"
			class="form-control" id="name" placeholder="Titre de l'Actualité...">
	</div>
	<div class="form-group">
		<label for="img">Image d'illustration de l'Actualité</label> <input
			type="file" id="img">
		<p class="help-block">Veullez selectionner une image à envoyer au
			serveur, cette image sert à illustré votre actualité.</p>
	</div>
	<div class="form-group">
		<label for="editor1">Votre Actualité</label>
		<textarea name="editor1" id="editor1"></textarea>
		<script>
         // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
       CKEDITOR.replace( 'editor1' );
	</script>
	</div>
	<button type="submit" class="btn btn-default pull-right">Valider</button>
</form>
<?php
$contents = ob_get_clean ();
$ckeditor = true;
if (is_file ( 'template/layout/layout.php' )) {
	require_once 'template/layout/layout.php';
}
?>