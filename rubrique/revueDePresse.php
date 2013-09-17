<?php require_once '../include/layout/haut.php';?>
<?php
	$reqRevue = $bdd->prepare('SELECT * FROM revueDePresse ORDER BY id DESC');
	$reqRevue->execute();
?>
<div class="container-fluid">
    <div class="row-fluid">



		<div class="span15">
			<div class="hero-unit">
				<div class="row">
					<div class="span15">
						<h1>Revue de presse</h1>
					</div>
				</div>
			</div>
		</div>

		<?php
			
				if ( isset($_SESSION["adminlvl"]) >= 3 && isset($_SESSION["login"])){				
					$req = $bdd->prepare('SELECT password, adminLevel FROM user WHERE nom_utilisateur = :id');
					$req->execute(array('id' => $_SESSION["login"]));
					if ($donnée = $req->fetch() ){
						if ($_SESSION["passEncrypt"]== myencrypt($donnée['password'])){
							echo '<div class="span1">';
							echo '<a data-toggle="modal" href="#moduleAddRevue" class="btn btn-primary btn-large btn-success">Ajouter une revue</a>';
							echo '<a data-toggle="modal" href="#moduleEditRevue" class="btn btn-primary btn-large btn-warning">Modifier une revue</a>';
							echo '<a data-toggle="modal" href="#moduleSupprRevue" class="btn btn-primary btn-large btn-danger">Suppr une revue</a>';
							echo '</div>';
						};
					};
				};
			?>
		<div class="span2" id="ContentLinkRevu">
			<ul style="list-style-type:none;">
				<?php
				$sourceTab = array();
				foreach($reqRevue as $row) {
					$sourceTab[]=$row['source'];
					$row['titre']=nl2br(stripslashes($row['titre']));
					echo "<li><a href=\"#\"  mysrc=\"".$row['source']."\">".$row['titre']."</a></li>";
					echo "<br/>";
				};
				?>
			</ul>	
		</div>
		<div class="span4" id="revuDePresse" style="margin-left:140px;">
			<iframe src="<?php echo $sourceTab[0];?>" width="900" height="550" ></iframe>
		</div>
	</div>
</div>



<div id="moduleAddRevue" class="modal hide fade">
	<div class="modal-header">
		<a class="close" data-dismiss="modal" >&times;</a>
		<h3>Ajout d'article</h3>
	</div> 
	<div class="modal-body">
		<form class="form-horizontal" method="POST" action="../include/ajoutBDD.php" enctype="multipart/form-data">              
			<div class="control-group">
				<label>Titre</label>
				<div class="controls">
					<input type="text" class="span3 form-inline" name="titre" placeholder="Titre de votre article">
				</div>
			</div>                                  
			<div class="control-group">
	 		 	<label>PDF</label>
	 		 	<div class="controls">
					<input type="file" class="span3 form-inline" name="pdf" id="pdf">
	  		 	</div>
			</div>  
			<input type="text" class="span3 form-inline" name="type" placeholder="Titre de la sous rubrique" value="revue" style="display:none;">                                   
			<div style="text-align:center;"><button type="submit" class="btn btn-success">Validation</button></div>
		</form>
	</div></div>
<div id="moduleEditRevue" class="modal hide fade">
	<div class="modal-header">
		<a class="close" data-dismiss="modal" >&times;</a>
		<h3>Edition d'article</h3>
	</div> 
	<div class="modal-body">
		<form class="form-horizontal" method="POST" action="../include/updateBDD.php" enctype="multipart/form-data">              
			<div class="control-group">
				<label>Titre</label>
				<div class="controls">
					<input type="text" class="span3 form-inline" name="titre" placeholder="Titre de votre article">
				</div>
			</div>
			<div class="control-group">
	 		 	<label>PDF</label>
	 		 	<div class="controls">
					<input type="file" class="span4 form-inline" name="pdf" id="pdf">
	  		 	</div>
			</div>  
			<input type="text" class="span3 form-inline" name="type" placeholder="Titre de la sous rubrique" value="revue" style="display:none;">                                   
			<div style="text-align:center;"><button type="submit" class="btn btn-success">Validation</button></div>
		</form>
	</div></div>
<div id="moduleSupprRevue" class="modal hide fade">
	<div class="modal-header">
		<a class="close" data-dismiss="modal" >&times;</a>
		<h3>Suppression d'article</h3>
	</div> 
	<div class="modal-body">
		<form class="form-horizontal" method="POST" action="../include/deleteBDD.php" enctype="multipart/form-data">              
			<div class="control-group">
				<label>Titre</label>
				<div class="controls">
					<input type="text" class="span3 form-inline" name="titre" placeholder="Titre de votre article à supprimer">
				</div>
			</div>                                  
			<input type="text" class="span3 form-inline" name="type" placeholder="Titre de la sous rubrique" value="revue" style="display:none;">                                   
			<div style="text-align:center;"><button type="submit" class="btn btn-success">Validation</button></div>
		</form>
	</div></div>



<?php require_once '../include/layout/bas.php';?>