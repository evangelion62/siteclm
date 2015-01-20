<?php ob_start();?>
<?php if (!empty($_SESSION['token'])){?>
<div class="btn-group">
	<a href="?controler=actu&action=addActu" class="btn btn-default"><span
		class="glyphicon glyphicon-plus"></span> Ajouter une actualité</a>
</div>
<?php }?>
<?php
foreach ( $actus as $value ) {?>
<hr style="margin-top: 5px;margin-bottom: 5px;">
<div class="media">
  <a class="pull-left" href="?controler=actu&action=getActu&id=<?php echo $value->id () ?>">
    <img class="media-object" src="<?php echo $value->img () ?>" alt="..." style="width:100px;box-shadow:0px 0px 10px black;">
  </a>
  <div class="media-body">
    <h4 class="media-heading"><a href="?controler=actu&action=getActu&id=<?php echo $value->id () ?>"> <?php echo $value->name () ?> </a></h4>
    <?php if (!empty($_SESSION['token'])){?>
    <p>
		<div class="btn-group">
			<a href="?controler=actu&action=updateActu&id=<?php echo $value->id ()?>" class="btn btn-default">Modifier <span class="glyphicon glyphicon-pencil"></span></a>
			<a href="?controler=actu&action=deletActu&id=<?php echo $value->id () ?>" class="btn btn-default">Supprimer <span class="glyphicon glyphicon-trash"></span></a>
		</div>
	</p>
	<?php }?>
    <p><?php echo $value->content () ?></p>
  </div>
</div>
<?php }?>
<?php if ($nbPages > 1){?>
<ul class="pagination">
	<li <?php if ($pageActive == 1){echo 'class="disabled"';}?>><a href="<?php echo '?controler=actu&action=allActu&page='.($pageActive-1); ?>">&laquo;</a></li>
	<?php
	for($i = 0; $i < $nbPages; $i ++) {
		if (($i + 1) == $pageActive) {
			echo '<li class="active"><a href="?controler=actu&action=allActu&page=' . ($i + 1) . '">' . ($i + 1) . '</a></li>';
		} else {
			echo '<li><a href="?controler=actu&action=allActu&page=' . ($i + 1) . '">' . ($i + 1) . '</a></li>';
		}
	}
	?>
	<li <?php if ($pageActive >= $nbPages){echo 'class="disabled"';}?>><a href="<?php if ($pageActive >= $nbPages){echo '#';}else{echo  '?controler=actu&action=allActu&page='.($pageActive+1);} ?>">&raquo;</a></li>
</ul>
<?php
}

$contents = ob_get_clean ();
if (is_file ( 'template/layout/layout.php' )) {
	require_once 'template/layout/layout.php';
}
?>