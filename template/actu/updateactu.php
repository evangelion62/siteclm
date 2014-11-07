<?php ob_start();?>
<h1>Ajout d'actualité</h1>
<form role="form"
	action="<?php if (!empty($formAction)){echo $formAction;}?>"
	method="POST"
	enctype="multipart/form-data"
	>
	<div class="form-group">
		<label for="name">Titre de l'Actualité</label> <input type="text"
			class="form-control" id="name" name="name" value="<?php echo $actu->name() ?>">
	</div>
	<div class="form-group">
		<label for="img">Image d'illustration de l'Actualité</label> <input
			type="file" id="img">
		<p class="help-block">Veuillez selectionner une image à envoyer au
			serveur, cette image sert à illustrer votre actualité.</p>
	</div>
	<div class="form-group">
		<label for="content">Votre Actualité</label>
		<textarea name="content" id="content"><?php echo $actu->content() ?></textarea>
		<script>
         // Replace the <textarea id="content"> with a CKEditor
        // instance, using default configuration.
       CKEDITOR.replace( 'content' );
	</script>
	</div>
	<input type="hidden" id="id" name="id" value="<?php echo $actu->id()?>">
	<input type="submit" class="btn btn-default pull-right" value="Valider">
</form>
<?php
$contents = ob_get_clean ();
$ckeditor = true;
if (is_file ( 'template/layout/layout.php' )) {
	require_once 'template/layout/layout.php';
}
?>