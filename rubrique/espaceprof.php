<?php
 	require_once '../include/conect.bdd.php';

	session_name('newSiteClm'); 
	session_start();

	if ($_SESSION["adminlvl"] == 4 || $_SESSION["adminlvl"] <= 2 || !isset($_SESSION["adminlvl"]) == 1){
		header("location:../home/");
	}

	require_once '../include/layout/haut.php';
	require_once '../include/functions.php';	
		
	$reqArticleAll = $bdd->prepare('SELECT * FROM articleProf ORDER BY date_creation DESC');
	$reqArticleAll->execute();
?>
<script type="text/javascript" src="https://www.dropbox.com/static/api/1/dropbox.js" id="dropboxjs" data-app-key="gienecmie5pkdvj"></script>
<div class="container-fluid">
    <div class="row-fluid">
		<div class="span15">
			<div class="hero-unit">
				<div class="row">
						<h1>Espace Professeur</h1>
						<h3>
							<?php
								if (isset($_GET['result'])){	
									if ("ajoute"==$_GET['result']){ 
										$_GET['result']="ajouté";}
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
							echo '<a data-toggle="modal" href="#moduleAddActuEspaceProf" class="btn btn-primary btn-large btn-success">Ajouter une actu</a>';
							echo '<a data-toggle="modal" href="#moduleEditActuEspaceProf" class="btn btn-primary btn-large btn-warning">Modifier une actu</a>';
							echo '<a data-toggle="modal" href="#moduleSupprActuEspaceProf" class="btn btn-primary btn-large btn-danger">Supprimer une actu</a>';
							echo '<br/><h3 class="wiki">Liens wiki :</h3>';
							echo '<a class="wikiLink" href="https://eduline.ac-lille.fr/personnel/internet/gest_doc_simplifiee/invite/main.php?section=7f9c2715-51ac-4643-b6eb-7347e16696b5&source=3944afa0-e33d-42d5-976b-1589846c976f"> Obbi</a>';
							echo '<a class="wikiLink" href="http://pdf.lu/waqT"> Pronote</a>';
							echo '<a class="wikiLink" href="https://docs.google.com/spreadsheet/ccc?key=0ArSynt-agcpCdEwtRFdTWUViLTJNcHZyMEVsMHVOeXc&usp=sharing"> HDA</a>';
							echo '</div>';
						};
					};
				};
			?>
		
		<div class="row">
			<div class="span4" style="margin-left:120px;">
				<table class="actualitePage" >
					<?php 
						$id=0;
						foreach($reqArticleAll as $row) {
							$id++;
							$row['titre']=nl2br(stripslashes($row['titre']));
							$row['contenu']=nl2br(stripslashes($row['contenu']));
							echo "<tr class=".$id."><td><h4 class=\"titreActu\">". $row['titre']."</h4></td></tr>";
							echo "<tr class=".$id." style=\"vertical-align:top;\"><td><img src=".$row['image']." style=\"height:105px;width:105px;float:left;\" alt=\"\"><p style=\"margin-left:115px;\">".$row['contenu']."</p></td></tr>";
						};
					?>
					<!--<input type="dropbox-chooser" name="selected-file" style="visibility: hidden;"/>-->
					<tr class="mybutton">
						<td class="btn">
							<a onclick="javascript:prevActuPage()">← précédent</a>
						</td>
						<td class="btn" style="float:right;">
							<a onclick="javascript:nextActuPage()">suivant →</a>
						</td>
					</tr>				
				</table>
			</div>

			<div class="span4" style="margin-left:50px;">
				<h4 style="text-align:center;">ChatBox</h4>
				<form action="../include/minichat_post.php" method="post">			        
					<?php
						// Récupération des 10 derniers messages
						$reponse = $bdd->prepare('SELECT pseudo, message FROM minichat ORDER BY ID ASC');
						$reponse->execute();
						$nbrRep = $bdd->prepare('SELECT count(*) FROM minichat');
						// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
						echo '<div style="height:200px;overflow:auto;" id="scrollbar">';
						foreach ($reponse as $donnees) 
						{
							echo '<p><strong>'.ucfirst(strtolower(htmlspecialchars($donnees['pseudo']))).'</strong> : '.htmlspecialchars($donnees['message']).'</p>';
						}	
						echo '</div>';		
					?>
					<p>
				        <textarea cols="25" rows="25" name="message" id="message" style="width: 350px; height: 18px;" placeholder="Message"></textarea>
				        <input type="submit" value="Envoyer" style="margin-bottom:8px;" />
				        <?php
						if ($_SESSION["adminlvl"] == 5){				
							$req = $bdd->prepare('SELECT password, adminLevel FROM user WHERE nom_utilisateur = :id');
							$req->execute(array('id' => $_SESSION["login"]));
							if ($donnée = $req->fetch() ){
								if ($_SESSION["passEncrypt"]== myencrypt($donnée['password'])){
						?>
				        <input type="submit" name="purge" id="purge" value="Purge"/>
				        <?php		
								}
							}
						}
						?>
					</p>
			    </form>
			</div>
		</div>
	</div>
</div>


<div id="moduleAddActuEspaceProf" class="modal hide fade">
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
				<label>Rubrique</label>
				<div class="controls">
					<input type="text" class="span3 form-inline" name="rubrique" placeholder="Titre de la rubrique">
				</div>
			</div>                                                                    
			<div class="control-group">
				<label>Contenu</label>
				<div class="controls">
					<textarea cols="25" rows="25" name="contenu" placeholder="Placer ici le contenu de l'article" style="width: 298px; height: 111px;"></textarea>
				</div>
			</div>
			<div class="control-group">
	 		 	<label>Image</label>
	 		 	<div class="controls">
					<input type="file" class="span4 form-inline" name="image" id="image">
	  		 	</div>
			</div>  
			<input type="text" class="span3 form-inline" name="type" placeholder="Titre de la sous rubrique" value="articleProf" style="display:none;">                                   
			<div style="text-align:center;"><button type="submit" class="btn btn-success">Validation</button></div>
		</form>
	</div></div>
<div id="moduleEditActuEspaceProf" class="modal hide fade">
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
				<label>Rubrique</label>
				<div class="controls">
					<input type="text" class="span3 form-inline" name="rubrique" placeholder="Titre de la rubrique">
				</div>
			</div>                                                                    
			<div class="control-group">
				<label>Contenu</label>
				<div class="controls">
					<textarea cols="25" rows="25" name="contenu" placeholder="Placer ici le contenu de l'article" style="width: 298px; height: 111px;"></textarea>
				</div>
			</div>
			<div class="control-group">
	 		 	<label>Image</label>
	 		 	<div class="controls">
					<input type="file" class="span4 form-inline" name="image" id="image">
	  		 	</div>
			</div>  
			<input type="text" class="span3 form-inline" name="type" placeholder="Titre de la sous rubrique" value="articleProf" style="display:none;">                                   
			<div style="text-align:center;"><button type="submit" class="btn btn-success">Validation</button></div>
		</form>
	</div></div>
<div id="moduleSupprActuEspaceProf" class="modal hide fade">
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
			<input type="text" class="span3 form-inline" name="type" placeholder="Titre de la sous rubrique" value="articleProf" style="display:none;">                                   
			<div style="text-align:center;"><button type="submit" class="btn btn-success">Validation</button></div>
		</form>
	</div></div>


<?php require_once '../include/layout/bas.php';?>
