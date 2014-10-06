<?php

/*Accessible à ?controler=user&action=disconnectuser*/

ob_start();?>
<div class="jumbotron">
  <h1><span class="label label-success">Déconnexion réussie ! </span></h1><>
  <p><a class="btn btn-primary btn-lg" role="button">Se reconnecter ?</a></p>
  <p><a class="btn btn-primary btn-lg" role="button">Retourner à l'accueil</a></p>
</div>
<div>
	<div class="row">
  	  <div class="col-md-6"><span class="glyphicon glyphicon-star"></span>.col-md-6</div>
  	  <div class="col-md-6">.col-md-6</div>
	</div>
</div>
<?php
$contents = ob_get_clean();
if (is_file('template/layout/layout.php')){
	require_once 'template/layout/layout.php';
}
?>
glyphicon glyphicon-remove-circle

