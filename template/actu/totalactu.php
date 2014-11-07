<?php ob_start();?>
<?php foreach ($actus as $value) {
	echo '<div class="media">
  <a class="pull-left" href="#">
    <img class="media-object" src="web/img/vert-64x64.gif" alt="...">
  </a>
  <div class="media-body">
    <h4 class="media-heading"><a href="?controler=actu&action=getActu&id='.$value->id().'">'.$value->name().'</a></h4>
    <p>'.$value->content().'</p>
    <p>
		<div class="btn-group">
	      	<a href="?controler=actu&action=addActu" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span></a>
			<a href="#" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
			<a href="#" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></a>
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