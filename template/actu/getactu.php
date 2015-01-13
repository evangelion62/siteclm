<?php ob_start();?>
<div class="row">
	<div class="col-sm-3 col-md-3">
		<div class="thumbnail">
			<a href="<?php echo $actu->img();?>" target="blank"> <img
				src="<?php echo $actu->img();?>" alt="" /></a>
		</div>
		<?php if (!empty($_SESSION['token'])){?>
		<div class="btn-group">
			<a
				href="?controler=actu&action=updateActu&id=<?php echo $actu->id();?>"
				class="btn btn-default">Modifier <span
				class="glyphicon glyphicon-pencil"></span></a> <a
				href="?controler=actu&action=deletActu&id=<?php echo $actu->id();?>"
				class="btn btn-default">Supprimer <span
				class="glyphicon glyphicon-trash"></span></a>
		</div>
		<?php }?>
	</div>
	<div class="col-sm-9 col-md-9">
		<h1 style="color: #5bc0de;"><?php echo $actu->name() ?></h1>
		<p><?php echo $actu->content()?></p>
	</div>
</div>
</p>
<?php
$contents = ob_get_clean ();
$ckeditor = true;
if (is_file ( 'template/layout/layout.php' )) {
	require_once 'template/layout/layout.php';
}
?>
