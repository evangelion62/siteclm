<?php

/*Accessible à ?controler=user&action=connectUser*/

ob_start();?>

	<h1>Espace de connexion</h1>
	<p>Identifiant & Mot de passe :<br>
<form class="form-horizontal" role="form" action="<?php if (!empty($formAction)){echo $formAction;}?>" method="POST">
	  <div class="form-group">
	    <label for="userId" class="col-sm-2 control-label">Votre identifiant</label>
	    <div class="col-sm-10">
	      <div class="input-group">
          <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
          <input class="form-control" type="text" name="userId" id="userId" placeholder="Votre identifiant...">
        </div>
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="userId" class="col-sm-2 control-label">Votre mot de passe</label>
	    <div class="col-sm-10">
	      <div class="input-group">
          <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
          <input class="form-control" type="text" name="mdpId" id="mdpId" placeholder="Votre mot de passe...">
        </div>
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-default">Connexion</button>
	    </div>
	  </div>
	</form>
<?php
$contents = ob_get_clean();
if (is_file('template/layout/layout.php')){
	require_once 'template/layout/layout.php';
}
?>