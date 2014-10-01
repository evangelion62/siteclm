<?php ob_start();?>
	<h1>Procédure d'installation du site</h1>
	<p>étape 1 - configuration de la base de données</p>
	<form class="form-horizontal" role="form" action="?controler=install&action=bddFirstConfig" method="post">
	  <div class="form-group">
	    <label for="host" class="col-sm-2 control-label">Serveur</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="host" placeholder="Serveur">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="dbname" class="col-sm-2 control-label">Base de données</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="dbname" placeholder="Base de données">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="user" class="col-sm-2 control-label">Utilisateur</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="user" placeholder="Utilisateur">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="pwd" class="col-sm-2 control-label">Mot de passe</label>
	    <div class="col-sm-10">
	      <input type="password" class="form-control" id="pwd" placeholder="Mot de passe">
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">Envoyer</button>
	    </div>
	  </div>
	</form>
<?php
$contents = ob_get_clean();
if (is_file('template/layout.php')){
	require_once 'template/layout.php';
}
?>