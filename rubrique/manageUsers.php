<?php 	
	
 	require_once '../include/conect.bdd.php';
		
	session_name('newSiteClm'); 
	session_start();

	if ($_SESSION["adminlvl"] != 5){
		header("location:../home/");
	}

	require_once '../include/functions.php';
	require_once '../include/layout/haut.php';

	$req = $bdd->prepare('SELECT * FROM user ORDER BY id ASC');
	$req->execute();
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
	<div class="well">
		<a data-toggle="modal" href="#moduleAddUser" class="btn btn-primary btn-large btn-success" style="width:97%;">Ajout d'utilisateur</a>
		<form id="manageCompte" class="form-horizontal"  method="POST" action="../include/manageCompteBDD.php" enctype="multipart/form-data">
			<table class="table table-bordered">
				<tr>
					<th>ID</th>
					<th>Utilisateur</th>
					<th>Mot de passe</th>
					<th>Cahier de texte</th>
					<th>GRR</th>
					<th>Kwartz</th>
					<th>WebClasseur</th>
					<th>Admin Level</th>
					<th>Options</th>
				</tr>
				<?php foreach($req as $row) {echo "<tr>
				<td>".$row['id'].'</td>
				<td>'.$row['nom_utilisateur'].'</td>
				<td>'.$row['password'].'</td>
				<td>'.$row['cahierDeText'].'</td>
				<td>'.$row['GRR'].'</td>
				<td>'.$row['pKwartz'].'</td>
				<td>'.$row['webClasseur'].'</td>
				<td>'.$row['adminLevel'].'</td>
				<td>
					<a data-toggle="modal" href="#moduleEditUser" class="btn btn-primary btn-warning btnEditUser" id="'.$row['id'].'">+/-</a>
					<a data-toggle="modal" href="#moduleDeleteUser" class="btn btn-primary btn-danger btnSuprUser" id="'.$row['id'].'">-</a>
				</td>    
				</tr>';}?>
			</table>
		</form>
	</div>
</div>


<div id="moduleDeleteUser" class="modal hide fade">
	<div class="modal-header">
		<a class="close" data-dismiss="modal" >&times;</a>
		<h3>Suppression d'utilisateur</h3>
	</div> 
	<div class="modal-body">
		<form class="form-horizontal" method="POST" action="../include/deleteBDD.php" enctype="multipart/form-data">              
			<div class="control-group">
				<h2>Etes vous sûr de vouloir supprimer l'utilisateur ?</h2>
				<div class="controls">
					<input type="text" style="display:none" class="validSuprUser" name="userID">
				</div>
			</div>                                  
			<input type="text" class="span3 form-inline" name="type" value="user" style="display:none;">                                   
			<div style="text-align:center;"><button type="submit" class="btn btn-success">Validation</button></div>
		</form>
	</div>
</div>

<div id="moduleEditUser" class="modal hide fade">
	<div class="modal-header">
		<a class="close" data-dismiss="modal" >&times;</a>
		<h3>Edition d'utilisateur</h3>
	</div> 
	<div class="modal-body">
		<form class="form-horizontal" method="POST" action="../include/updateBDD.php" enctype="multipart/form-data">              
			<div class="control-group">
				<label>Utilisateur</label>
				<div class="controls">
					<input type="text" class="span3 form-inline utilisateurEditUsername" name="utilisateur">
				</div>
			</div>                                                                                                         
			<div class="control-group">
				<label>Mot de passe</label>
				<div class="controls">
					<input type="text" class="span3 form-inline utilisateurEditPassword" name="mdp">
				</div>
			</div> 
			<div class="control-group">
				<label>Cahier de texte</label>
				<div class="controls">
					<input type="text" class="span3 form-inline utilisateurEditCDT" name="cdt">
				</div>
			</div> 
			<div class="control-group">
				<label>GRR</label>
				<div class="controls">
					<input type="text" class="span3 form-inline utilisateurEditGRR" name="grr">
				</div>
			</div> 
			<div class="control-group">
				<label>Kwartz</label>
				<div class="controls">
					<input type="text" class="span3 form-inline utilisateurEditKwartz" name="kwartz">
				</div>
			</div> 
			<div class="control-group">
				<label>WebClasseur</label>
				<div class="controls">
					<input type="text" class="span3 form-inline utilisateurEditWebClasseur" name="webClasseur">
				</div>
			</div> 
			<div class="control-group">
				<label>Admin Level</label>
				<div class="controls">
					<input type="text" class="span3 form-inline titreEditAdminLevel" name="adminLevel">
				</div>
			</div> 
			  
			<input type="text" style="display:none" class="validEditUser" name="id">   
			<input type="text" name="type" value="user" style="display:none;">                              
			<div style="text-align:center;"><button type="submit" class="btn btn-success">Validation</button></div>
		</form>
	</div>
</div>

<div id="moduleAddUser" class="modal hide fade">
	<div class="modal-header">
		<a class="close" data-dismiss="modal" >&times;</a>
		<h3>Ajout d'utilisateur</h3>
	</div> 
	<div class="modal-body">
		<form class="form-horizontal" method="POST" action="../include/ajoutBDD.php" enctype="multipart/form-data">              
			<div class="control-group">
				<label>Utilisateur</label>
				<div class="controls">
					<input type="text" class="span3 form-inline" name="utilisateur">
				</div>
			</div>                                                                                                         
			<div class="control-group">
				<label>Mot de passe</label>
				<div class="controls">
					<input type="text" class="span3 form-inline" name="mdp">
				</div>
			</div> 
			<div class="control-group">
				<label>Cahier de texte</label>
				<div class="controls">
					<input type="text" class="span3 form-inline" name="cdt">
				</div>
			</div> 
			<div class="control-group">
				<label>GRR</label>
				<div class="controls">
					<input type="text" class="span3 form-inline" name="grr">
				</div>
			</div> 
			<div class="control-group">
				<label>Kwartz</label>
				<div class="controls">
					<input type="text" class="span3 form-inline" name="kwartz">
				</div>
			</div> 
			<div class="control-group">
				<label>WebClasseur</label>
				<div class="controls">
					<input type="text" class="span3 form-inline" name="webClasseur">
				</div>
			</div> 
			<div class="control-group">
				<label>Admin Level</label>
				<div class="controls">
					<input type="text" class="span3 form-inline" name="adminLevel">
				</div>
			</div> 
			<input type="text" name="type" value="user" style="display:none;">                              
			<div style="text-align:center;"><button type="submit" class="btn btn-success">Validation</button></div>
		</form>
	</div>
</div>

<?php require_once '../include/layout/bas.php'; ?>