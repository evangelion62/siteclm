<?php

/*Accessible à ?controler=install&action=siteAdminConfig*/

ob_start();?>

	<h1>Ajout d'utilisateur</h1>
	<p>Identifiant & Mot de passe :<br>
<form class="form-horizontal" role="form" action="<?php if (!empty($formAction)){echo $formAction;}?>" method="POST">
	  <p><span class="label label-warning">Important</span> Notez soigneusement l'identifiant et le mot de passe et conservez-les à l'abri des regards indiscrets. 
	  </p>
	  <div class="form-group">
	    <label for="userId" class="col-sm-2 control-label">Votre identifiant</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="userId" id="userId" placeholder="Votre identifiant..." >
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="userMdp" class="col-sm-2 control-label">Mot de passe</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="userMdp" id="userMdp" placeholder="Votre mot de passe...">
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
if (is_file('template/layout/layout.php')){
	require_once 'template/layout/layout.php';
}
?>