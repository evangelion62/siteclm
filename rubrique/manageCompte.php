<?php 	
	require_once '../include/layout/haut.php';
 	require_once '../include/conect.bdd.php';
	require_once '../include/functions.php';	

	$reqOtherSite = $bdd->prepare('SELECT * FROM user WHERE nom_utilisateur = :nom_utilisateur');
	$reqOtherSite->execute(array('nom_utilisateur' => $_SESSION["login"]));

	foreach ($reqOtherSite as $key) {
		if (!empty($key["cahierDeText"])){
			$cahier = explode(";", $key["cahierDeText"]);
		}
		else $cahier = null;

		if (!empty($key["GRR"])){
			$grr = explode(";", $key["GRR"]);
		}
		else $grr = null;

		if (!empty($key["pKwartz"])){
			$pKwartz = explode(";", $key["pKwartz"]);
		}
		else $pKwartz = null;
		if (!empty($key["webClasseur"])){
			$webclasseur = explode(";", $key["webClasseur"]);
		}
		else $pKwartz = null;
		if (!empty($key["password"])){
			$password = $key["password"];
		}
		else $password = null;
	}

?>

<div class="container-fluid">
    <div class="row-fluid">
		<div class="span15">
			<div class="hero-unit">
				<div class="row">
						<h1>Gestion de compte</h1>
				</div>
			</div>			
		</div>
	</div>
	<div class="well well2">
		<form id="manageCompte" class="form-horizontal"  method="POST" action="../include/manageCompteBDD.php" enctype="multipart/form-data">
			<legend>Site du collège</legend>
			<div class="control-group ">
				<label class="control-label">Password</label>
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-lock"></i></span>
						<input type="password" class="span2 form-inline" name="SiteCollegePassword" placeholder="Mot de passe" 
						<?php 
							if (!empty($password)) {
								echo 'value='.$password;
							}
						?>>
						</div>
					</div>
				</div>				
			<legend>Cahier de texte</legend>
			<div class="control-group ">
				<label class="control-label">Username</label>
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-user"></i></span>
						<input type="text" class="span2 form-inline" name="usernameCDT" placeholder="Nom d'utilisateur" 
						<?php 
							if (!empty($cahier)) {
								echo 'value='.$cahier[0];
							}
						?>>
					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Password</label>
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-lock"></i></span>
						<input type="password" class="span2 form-inline" name="PasswordCDT" placeholder="Mot de passe" 
						<?php 
							if (!empty($cahier)) {
								echo 'value='.$cahier[1];
							}
						?>>
					</div>
				</div>
			</div>
			<legend>GRR</legend>
			<div class="control-group ">
				<label class="control-label">Username</label>
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-user"></i></span>
						<input type="text" class="span2 form-inline" name="usernameGRR" placeholder="Nom d'utilisateur" 
						<?php 
							if (!empty($grr)) {
								echo 'value='.$grr[0];
							}
						?>>
					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Password</label>
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-lock"></i></span>
						<input type="password" class="span2 form-inline" name="PasswordGRR" placeholder="Mot de passe" 
						<?php 
							if (!empty($grr)) {
								echo 'value='.$grr[1];
							}
					?>>
					</div>
				</div>
			</div>
			<legend>Portail Kwartz</legend>
			<div class="control-group ">
				<label class="control-label">Username</label>
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-user"></i></span>
						<input type="text" class="span2 form-inline" name="usernamePKwartz" placeholder="Nom d'utilisateur" 
						<?php 
							if (!empty($pKwartz)) {
								echo 'value='.$pKwartz[0];
							}
						?>>
					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Password</label>
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-lock"></i></span>
						<input type="password" class="span2 form-inline" name="PasswordPKwartz" placeholder="Mot de passe" 
						<?php 
							if (!empty($pKwartz)) {
								echo 'value='.$pKwartz[1];
							}
						?>>
					</div>
				</div>
			</div>
			<legend>Webclasseur</legend>
			<div class="control-group ">
				<label class="control-label">Username</label>
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-user"></i></span>
						<input type="text" class="span2 form-inline" name="usernameWebClasseur" placeholder="Nom d'utilisateur" 
						<?php 
							if (!empty($webclasseur)) {
								echo 'value='.$webclasseur[0];
							}
						?>>
					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Password</label>
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-lock"></i></span>
						<input type="password" class="span2 form-inline" name="passwordWebClasseur" placeholder="Mot de passe" 
						<?php 
							if (!empty($webclasseur)) {
								echo 'value='.$webclasseur[1];
							}
						?>>
					</div>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label"></label>
				<div class="controls">
					<button type="submit" class="btn btn-success">Valider</button>
				</div>
			</div>
		</form>
	</div>
</div>
<?php require_once '../include/layout/bas.php'; ?>