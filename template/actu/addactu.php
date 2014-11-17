<?php ob_start();?>
<h1>Ajout d'Actualité</h1>
<form role="form"
	action="<?php if (!empty($formAction)){echo $formAction;}?>"
	method="POST" enctype="multipart/form-data">
	<div class="form-group">
		<label for="name">Titre de l'actualité</label> <input type="text"
			class="form-control" id="name" name="name"
			placeholder="Titre de l'Actualité...">
	</div>
	<div class="form-group">
		<a href="#" id='btnimgslct' class="btn btn-default"
			data-toggle="modal" data-target="#myModal">Image d'illustration de
			l'Actualité</a>
		<p class="help-block">Veuillez selectionner une image, cette image
			sert à illustrer votre actualité.</p>
	</div>
	<input type="hidden" id="imgActu" name="imgActu" value="0">
	<div class="form-group">
		<label for="content">Votre Actualité</label>
		<textarea name="content" id="content" name="content"></textarea>
		<script>
         // Replace the <textarea id="content"> with a CKEditor
        // instance, using default configuration.
       CKEDITOR.replace( 'content' );
	</script>
	</div>
	<input type="submit" class="btn btn-default pull-right" value="Valider">
</form>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog"
	aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">nom de l'image</h4>
			</div>
			<div class="modal-body">
				<div class="row">
				<?php foreach ($imgs as $img) {?>
					<div class="col-xs-6 col-sm-4 col-md-4">
						<a
							onclick="var input = document.getElementById('imgActu');
									input.setAttribute('value', '<?php echo $img->link();?>');
									document.getElementById('myModalLabel').innerHTML = '<?php echo $img->name();?>'
									document.getElementById('btnimgslct').innerHTML = '<?php echo $img->name();?>'"
							href="#">
							<div class="thumbnail">
								<img src="<?php echo $img->link();?>"
									alt="<?php echo $img->name();?>">
							</div>
						</a>
					</div>
				<?php }?>
				</div>
			</div>
			<div class="modal-footer">
				<ul class="pagination">
					<li class="disabled"><a href="#">&laquo;</a></li>
					<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">&raquo;</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php
$contents = ob_get_clean ();
$ckeditor = true;
if (is_file ( 'template/layout/layout.php' )) {
	require_once 'template/layout/layout.php';
}
?>