<?php
/*template de configuration de la  bdd
 * varriable attendu $formAction avec la cible du formulaire
 * varriable annex $userErrors['bdderror'] et $bddLastConfig[]*/
ob_start();?>
	<h1>Procédure d'installation du site</h1>
	<p>étape 1 - configuration de la base de données<br>
	<?php if (!empty($userErrors['bdderror']))
			{
				echo '<span class="label label-danger">'.$userErrors['bdderror'].'</span>';
			}
	?>
	</p>
	<form class="form-horizontal" role="form" action="<?php if (!empty($formAction)){echo $formAction;}?>" method="POST">
	  <div class="form-group">
	    <label for="host" class="col-sm-2 control-label">Serveur</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="host" id="host" placeholder="Serveur" <?php if (isset($bddLastConfig['host'])){echo 'value="'.$bddLastConfig['host'].'"';}?>>
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="dbname" class="col-sm-2 control-label">Base de données</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="dbname" id="dbname" placeholder="Base de données" <?php if (isset($bddLastConfig['dbname'])){echo 'value="'.$bddLastConfig['dbname'].'"';}?>>
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="user" class="col-sm-2 control-label">Utilisateur</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="user" id="user" placeholder="Utilisateur" <?php if (isset($bddLastConfig['user'])){echo 'value="'.$bddLastConfig['user'].'"';}?>>
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="pwd" class="col-sm-2 control-label">Mot de passe</label>
	    <div class="col-sm-10">
	      <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Mot de passe">
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