<?php ob_start();?>
<img src="<?php echo $actu->img();?>" alt="" style="width: 400px; float: left; margin-right: 10px;">
<h1><?php echo $actu->name() ?></h1>
<p><?php echo $actu->content()?></p>
 <p style="clear: both;">
		<div class="btn-group">
			<a href="?controler=actu&action=updateActu&id=<?php echo $actu->id();?>" class="btn btn-default">Modifier <span class="glyphicon glyphicon-pencil"></span></a>
			<a href="?controler=actu&action=deletActu&id=<?php echo $actu->id();?>" class="btn btn-default">Supprimer <span class="glyphicon glyphicon-trash"></span></a>
		</div>
	</p>
<?php
$contents = ob_get_clean ();
$ckeditor = true;
if (is_file ( 'template/layout/layout.php' )) {
	require_once 'template/layout/layout.php';
}
?>
