<?php 	
	require_once '../include/layout/haut.php';
	require_once '../include/conect.bdd.php';
	require_once '../include/functions.php';
		
	
	$reqTitleEvent = $bdd->prepare('SELECT DISTINCT titre FROM evenement ORDER BY ID DESC LIMIT 5');
	$reqTitleEvent->execute();
	
?>

<div id="dark-background"></div>
<div class="container-fluid">
    <div class="row-fluid">
		<div class="span15">
			<div class="hero-unit">
				<div class="row">
					<h1>Le collège en images</h1>
					<h3>
					<?php
						if (isset($_GET['result'])){	
							if ("ajoute"==$_GET['result']){$_GET['result']="ajouté";}
							echo $_GET['ajout'].' '.$_GET['result'];
						};
					?>
					</h3>				
				</div>
			</div>			
		</div>
	</div>

    <div class="row-fluid">
		
			<?php
				if ( isset($_SESSION["adminlvl"]) >= 3 && isset($_SESSION["login"])){				
					$req = $bdd->prepare('SELECT password, adminLevel FROM user WHERE nom_utilisateur = :id');
					$req->execute(array('id' => $_SESSION["login"]));
					if ($donnée = $req->fetch() ){
						if ($_SESSION["passEncrypt"]== myencrypt($donnée['password'])){
							echo '<div class="span2">';
							echo '<a data-toggle="modal" href="#moduleAddActuCLGEnImages" class="btn btn-primary btn-large btn-success">Ajouter une image dans un album</a>';
							echo '<a data-toggle="modal" href="#moduleSupprActuCLGEnImages" class="btn btn-primary btn-large btn-danger">Supprimer un album</a>';
							echo '</div>';
						};
					};
				};
			?>
		
		<div class="span10"> 
			<table class="ClgEnimagesPage" >					
				<?php 
					$id=0;					
					foreach ($reqTitleEvent as $row){
						$row['titre']=nl2br(stripslashes($row['titre']));
						echo "<h4 style=\"text-align:left;margin-top:120px;\" class=\"tImg\">".$row['titre']."</h4>";
						echo"<ul id=\"imageEvent\">";
						$reqEventAll2 = $bdd->prepare('SELECT * FROM evenement');
						$reqEventAll2->execute();
						foreach ($reqEventAll2 as $row2){
							$row2['titre']=nl2br(stripslashes($row2['titre']));
							$row2['commentaire']=nl2br(stripslashes($row2['commentaire']));		
							if($row['titre']==$row2['titre']){
								$id++;								
								echo"<li><span class=\"titreImage\">".$row2['commentaire']."</span>";
								echo"<span class=\"commentaireImage\">".$row2['commentaire']."</span>";
								echo"<img src=".$row2['image']." alt=\"\"></li>";
							}
							else continue;
						}echo"</ul>";						
					}					
				?>
			</table>
		</div>
    </div>
</div>

<div id="popup"></div>

<div id="moduleAddActuCLGEnImages" class="modal hide fade">
	<div class="modal-header">
		<a class="close" data-dismiss="modal" >&times;</a>
		<h3>Ajout d'image</h3>
	</div> 
	<div class="modal-body">
		<form class="form-horizontal" method="POST" action="../include/ajoutBDD.php" enctype="multipart/form-data">              
			<div class="control-group">
	 		 <label>Titre</label>
			  <div class="controls">
				<input type="text" class="span3 form-inline" name="titre" placeholder="Titre de votre evenement">
			  </div>
			</div>                                                                                                           
			<div class="control-group">
			  <label>Commentaire</label>
			  <div class="controls">
				<textarea cols="25" rows="25" name="contenu" placeholder="Placer ici le commentaire de l'evenement" style="width: 298px; height: 111px;"></textarea>
			  </div>
			</div>
			<div class="control-group">
	 		 <label>Image</label>
	 		 <div class="controls">
				<input type="file" class="span4 form-inline" name="image" id="image">
	  		 </div>
			</div>   
			<input type="text" class="span3 form-inline" name="type" placeholder="Titre de la sous rubrique" value="clgEnImage" style="display:none;">                              
			<div style="text-align:center;"><button type="submit" class="btn btn-success">Validation</button></div>
		</form>
	</div></div>
<div id="moduleSupprActuCLGEnImages" class="modal hide fade">
	<div class="modal-header">
		<a class="close" data-dismiss="modal" >&times;</a>
		<h3>Suppression d'image</h3>
	</div> 
	<div class="modal-body">
		<form class="form-horizontal" method="POST" action="../include/deleteBDD.php" enctype="multipart/form-data">              
			<div class="control-group">
				<label>Titre</label>
				<div class="controls">
					<input type="text" class="span3 form-inline" name="titre" placeholder="Titre de votre image à supprimer">
				</div>
			</div>                                  
			<input type="text" class="span3 form-inline" name="type" placeholder="Titre de la sous rubrique" value="clgEnImage" style="display:none;">                                   
			<div style="text-align:center;"><button type="submit" class="btn btn-success">Validation</button></div>
		</form>
	</div></div>

<?php require_once '../include/layout/bas.php';?>
