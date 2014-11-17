<?php ob_start();?>
<div class="btn-group">
	      	<a href="?controler=actu&action=addActu" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> Ajouter une actualité</a>
		</div>
<?php foreach ($actus as $value) {
	echo '<div class="media">
  <a class="pull-left" href="?controler=actu&action=getActu&id='.$value->id().'">
    <img class="media-object" src="'.$value->img().'" alt="..." style="width:100px;">
  </a>
  <div class="media-body">
    <h4 class="media-heading"><a href="?controler=actu&action=getActu&id='.$value->id().'">'.$value->name().'</a></h4>
    <p>'.$value->content().'</p>
    <p>
		<div class="btn-group">
			<a href="?controler=actu&action=updateActu&id='.$value->id().'" class="btn btn-default">Modifier <span class="glyphicon glyphicon-pencil"></span></a>
			<a href="?controler=actu&action=deletActu&id='.$value->id().'" class="btn btn-default">Supprimer <span class="glyphicon glyphicon-trash"></span></a>
		</div>
	</p>
  </div>
</div>
<hr>';
}?>
<?php
$contents = ob_get_clean();
if (is_file('template/layout/layout.php')){
	require_once 'template/layout/layout.php';
}
?>