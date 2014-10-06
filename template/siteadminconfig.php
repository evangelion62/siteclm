<?php
/*template de configuration de la  bdd
 * varriable attendu $formAction avec la cible du formulaire
* varriable annex $userErrors['bdderror'] et $bddLastConfig[]
* Accessible à ?controler=install&action=siteAdminConfig*/
ob_start();?>

	<h1>Procédure d'installation du site</h1>
	<p>Etape 3 - Identité de votre administrateur<br>
<form class="form-horizontal" role="form" action="<?php if (!empty($formAction)){echo $formAction;}?>" method="POST">
	  <p><span class="label label-warning">Important</span> L'administrateur possède l'accès à l'ensemble du site et à toutes les informations sensibles. Notez soigneusement l'identifiant et le mot de passe et conservez-les à l'abri des regards indiscrets. 
	  </p>
	  <div class="form-group">
	    <label for="adminId" class="col-sm-2 control-label">Identifiant Administrateur</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="adminId" id="adminId" placeholder="Votre identifiant administrateur..." >
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="adminMdp" class="col-sm-2 control-label">Mot de passe</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="adminMdp" id="adminMdp" placeholder="Votre mot de passe...">
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">Valider</button>
	    </div>
	  </div>
	</form>
<?php
$contents = ob_get_clean();
if (is_file('template/layout.php')){
	require_once 'template/emptylayout.php';
}
?>
