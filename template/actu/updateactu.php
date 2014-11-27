<?php ob_start();?>
<h1>Ajout d'actualité</h1>
<form role="form"
	action="<?php if (!empty($formAction)){echo $formAction;}?>"
	method="POST" enctype="multipart/form-data">
	
	<div class="form-group">
		<label for="name">Titre de l'Actualité</label> <input type="text"
			class="form-control" id="name" name="name"
			value="<?php echo $actu->name() ?>">
	</div>
	
	<div class="form-group">
		<a href="#" id='btnimgslct' class="btn btn-default"
			data-toggle="modal" data-target="#myModal">Image d'illustration de
			l'Actualité</a>
		<p class="help-block">Veuillez selectionner une image, cette image
			sert à illustrer votre actualité.</p>
	</div>
	
	<input type="hidden" id="imgActu" name="imgActu" value="<?php echo $actu->img() ?>" >
	
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
			
			<?php if ($nbPages > 1){?>
			<ul class="pagination" style = "margin-left: 10px;">
				<li <?php if ($pageActive == 1){echo 'class="disabled"';}?>><a
					href="<?php echo '?controler=actu&action=updateActu&id='.$actu->id().'&pageImg='.($pageActive-1); ?>">&laquo;</a></li>
			<?php
				for($i = 0; $i < $nbPages; $i ++) {
					if (($i + 1) == $pageActive) {
						echo '<li class="active"><a href="?controler=actu&action=updateActu&id=' . $actu->id () . '&pageImg=' . ($i + 1) . '">' . ($i + 1) . '</a></li>';
					} else {
						echo '<li><a href="?controler=actu&action=updateActu&id=' . $actu->id () . '&pageImg=' . ($i + 1) . '">' . ($i + 1) . '</a></li>';
					}
				}
				?>
				<li <?php if ($pageActive >= $nbPages){echo 'class="disabled"';}?>><a
					href="<?php if ($pageActive >= $nbPages){echo '#';}else{echo  '?controler=actu&action=updateActu&id='.$actu->id().'&pageImg='.($pageActive+1);} ?>">&raquo;</a></li>
			</ul>
			<?php }	?>
		</div>
	</div>
</div>
<?php
if (!empty($_GET['pageImg'])){
	$jsScript = 'web/js/myscript.js';	
}
$contents = ob_get_clean ();
$ckeditor = true;
if (is_file ( 'template/layout/layout.php' )) {
	require_once 'template/layout/layout.php';
}
?>