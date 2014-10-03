<?php
/*template de configuration de la  bdd
 * varriable attendu $formAction avec la cible du formulaire
* varriable annex $userErrors['bdderror'] et $bddLastConfig[]
* Accessible à ?controler=install&action=siteNameConfig*/
ob_start();?>

	<h1>Procédure d'installation du site</h1>
	<p>Etape 2 - Identité de votre site<br>
<form class="form-horizontal" role="form" action="<?php if (!empty($formAction)){echo $formAction;}?>" method="POST">
	  <div class="form-group">
	    <label for="sitename" class="col-sm-2 control-label">Nom du site</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="sitename" id="sitename" placeholder="Nom du site" >
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="urlsite" class="col-sm-2 control-label">Utilisateur</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="urlsite" id="urlsite" placeholder="Adresse du site">
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