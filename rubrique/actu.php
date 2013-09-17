<?php 	
	require_once '../include/layout/haut.php';
 	require_once '../include/conect.bdd.php';
	require_once '../include/functions.php';	
		
	$reqArticleAll = $bdd->prepare('SELECT * FROM article ORDER BY date_creation DESC');
	$reqArticleAll->execute();

?>

<div class="container-fluid">
    <div class="row-fluid">
		<div class="span15">
			<div class="hero-unit">
				<div class="row">
						<h1>Les dernières actualités</h1>
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
							echo '<a data-toggle="modal" href="#moduleAddActu" class="btn btn-primary btn-large btn-success">Ajouter une actu</a>';
							echo '</div>';
						};
					};
				};
			?>
		
		<div class="span10">
			<table class="actualitePage" >			
				<?php
				if ( isset($_SESSION["adminlvl"]) >= 3 && isset($_SESSION["login"])){				
					$req = $bdd->prepare('SELECT password, adminLevel FROM user WHERE nom_utilisateur = :id');
					$req->execute(array('id' => $_SESSION["login"]));
					if ($donnée = $req->fetch() ){
						if ($_SESSION["passEncrypt"]== myencrypt($donnée['password'])){
							$id=0;
							foreach($reqArticleAll as $row) {
								$id++;
								$row['titre']=nl2br(stripslashes($row['titre']));
								$row['contenu']=nl2br(stripslashes($row['contenu']));
								echo "<tr class=".$id."><td><h4 class=\"titreActu\"><a id=".$row['id']." data-toggle=\"modal\" href=\"#moduleSupprActu\" style=\"float:left;\" class=\"btn btn-primary btn-large btn-danger btnSuprActu\">X</a><a id=".$row['id']." data-toggle=\"modal\" href=\"#moduleEditActu\" style=\"float:left;\" class=\"btn btn-primary btn-large btn-warning btnEditActu\">E</a><p>".$row['titre']."</p></h4></tr>";
								echo "<tr class=".$id." style=\"vertical-align:top;\"><td><img src=".$row['image']." style=\"height:105px;width:105px;float:left;\" alt=\"\"><p style=\"padding-left:115px;\">".$row['contenu']."</p></td></tr>";
							};
						};
					};
				} else{
					$id=0;
							foreach($reqArticleAll as $row) {
								$id++;
								$row['titre']=nl2br(stripslashes($row['titre']));
								$row['contenu']=nl2br(stripslashes($row['contenu']));
								echo "<tr class=".$id."><td><h4 class=\"titreActu\"><p>".$row['titre']."</p></h4></tr>";
								echo "<tr class=".$id." style=\"vertical-align:top;\"><td><img src=".$row['image']." style=\"height:105px;width:105px;float:left;\" alt=\"\"><p style=\"padding-left:115px;\">".$row['contenu']."</p></td></tr>";
							};
				};
				?>
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
	</div>
</div>

<div id="moduleAddActu" class="modal hide fade">
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
			<input type="text" class="span3 form-inline" name="type" placeholder="Titre de la sous rubrique" value="article" style="display:none;">                              
			<div style="text-align:center;"><button type="submit" class="btn btn-success">Validation</button></div>
		</form>
	</div>
</div>
<div id="moduleEditActu" class="modal hide fade">
	<div class="modal-header">
		<a class="close" data-dismiss="modal" >&times;</a>
		<h3>Edition d'article</h3>
	</div> 
	<div class="modal-body">
		<form class="form-horizontal" method="POST" action="../include/updateBDD.php" enctype="multipart/form-data">              
			<div class="control-group">
				<label>Titre</label>
				<div class="controls">
					<input type="text" class="span3 form-inline titreEditArticle" name="titre" placeholder="Titre de votre article à éditer">
				</div>
			</div>                                                                                                         
			<div class="control-group">
				<label>Contenu</label>
				<div class="controls">
					<textarea cols="25" rows="25" name="contenu" class="ContenuEditArticle" placeholder="Placer ici le nouveau contenu de l'article" style="width: 298px; height: 111px;"></textarea>
				</div>
			</div> 
			<div class="control-group">
	 			<label>Image</label>
	 		 	<div class="controls">
					<input type="file" class="span4 form-inline" name="image" id="image">
	  		 	</div>
			</div>  
			<input type="text" style="display:none" class="validEditArticle" name="titre">   
			<input type="text" class="span3 form-inline" name="type" placeholder="Titre de la sous rubrique" value="article" style="display:none;">                              
			<div style="text-align:center;"><button type="submit" class="btn btn-success">Validation</button></div>
		</form>
	</div>
</div>
<div id="moduleSupprActu" class="modal hide fade">
	<div class="modal-header">
		<a class="close" data-dismiss="modal" >&times;</a>
		<h3>Suppression d'article</h3>
	</div> 
	<div class="modal-body">
		<form class="form-horizontal" method="POST" action="../include/deleteBDD.php" enctype="multipart/form-data">              
			<div class="control-group">
				<h2>Etes vous sûr de vouloir supprimer l'article?</h2>
				<div class="controls">
					<input type="text" style="display:none" class="span3 form-inline validSuprArticle" name="titre">
				</div>
			</div>                                  
			<input type="text" class="span3 form-inline" name="type" placeholder="Titre de la sous rubrique" value="article" style="display:none;">                                   
			<div style="text-align:center;"><button type="submit" class="btn btn-success">Validation</button></div>
		</form>
	</div>
</div>

<?php require_once '../include/layout/bas.php'; ?>