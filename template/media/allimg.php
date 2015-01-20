<?php ob_start();?>

<table class="table table-hover">
  	<tr>
  		<th>ID</th>
  		<th>Nom de l'image</th>
  		<th>lien</th>
  		<th>image</th>
  		<th>Actions <div class="btn-group">
  			<a href="?controler=media&action=addImg" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span></a>
		</div></th>
  	</tr>
  	<?php foreach ($imgs as $img) {
  	?>
  	<tr>
  		<td><?php echo $img->id();?></td>
  		<td><?php echo $img->name();?></td>
  		<td><a href="<?php echo $img->link();?>"><?php echo $img->link();?></a></td>
  		<td><a href="<?php echo $img->link();?>"><img alt="" src="<?php echo $img->link();?>" style="width: 200px;"></a></td>
  		<td><div class="btn-group">
		  <a href="?controler=media&action=deleteImg&id=<?php echo $img->id();?>" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></a>
		</div></td>
  	</tr>
  	<?php 
  	}?>
</table>

<?php
$contents = ob_get_clean ();
$ckeditor = false;
if (is_file ( 'template/layout/layout.php' )) {
	require_once 'template/layout/layout.php';
}
?>