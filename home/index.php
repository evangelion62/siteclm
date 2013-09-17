<?php require_once '../include/layout/haut.php';?>
<?php require_once '../include/conect.bdd.php';?>
<?php 
	$reqArticleAll = $bdd->prepare('SELECT * FROM article ORDER BY date_creation DESC LIMIT 0,5');
	$reqArticleAll->execute();
	
	$reqCountArticle = $bdd->prepare('SELECT count(id) FROM article');
	$reqCountArticle->execute();
	
	$reqEvent = $bdd->prepare('SELECT * FROM evenement ORDER BY ID DESC LIMIT 0,10');
	$reqEvent->execute();
?>

<div class="container">
	<div class="hero-unit">
		<div class="row">
			<div class="span4">
				<img src="../include/image/LilleCollegeLouiseMichel3_12.jpg" style="height:170px;"/>
			</div>
			<div class="span6">
				<h1>Bienvenue</h1>
				<h2>sur le site du Collège Louise Michel de Lille</h2>
			</div>
		</div>
	</div>

	<hr />

	<!-- Example row of columns -->
	<div class="row">
		<div class="span4">
			<h2>Actualité</h2>
			<table class="actualite" style="display:none;">
				<?php 
					$id=0;
					foreach($reqArticleAll as $row) {
						$id++;
						$row['titre']=stripslashes($row['titre']);
						$row['contenu']=nl2br(stripslashes($row['contenu']));
						echo "<tr class=".$id."><td><h4>".$row['titre']."</h4></td></tr>".
							 "<tr class=".$id." style=\"height:220px; vertical-align:top;\"><td style=\"width:400px;text-align:justify\">".$row['contenu']."</td></tr>";
					};
				?>
				<tr class="mybutton">
					<td class="btn">
						<a onclick="javascript:prevHome()" style="">← précédent</a>
					</td>
					<td class="btn" style="float:right;">
						<a onclick="javascript:nextHome()" style="">suivant →</a>
					</td>
				</tr>
			</table>
		</div>
		
		<div class="span4">
			<h2>Le collège en image</h2>
			 <div class="bs-docs-example">
              <div id="myCarousel" class="carousel slide">
                <div class="carousel-inner">
                	<?php foreach($reqEvent as $row2){
                		$row2['titre']=stripslashes($row2['titre']);
                		$row2['commentaire']=stripslashes($row2['commentaire']);
						echo"<div class=\"item\">
						 	<img src=".$row2['image']." alt=\"\">
								 <div class=\"carousel-caption\">
									 <h4>".$row2['titre']."</h4>
									 <p>".$row2['commentaire']."</p>
								 </div>
						 	</div>
					";}?>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
              </div>
            </div>
		</div>
		
		<div class="span4">
			<div style="text-align:center;">
			<h2>Informations</h2>			
			<iframe width="300" height="269" src="https://maps.google.fr/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=COLLEGE+LOUISE+MICHEL,+Rue+de+Cannes,+Lille&amp;aq=0&amp;oq=coll%C3%A9ge+louise+m&amp;sll=50.529025,2.893638&amp;sspn=1.850827,4.784546&amp;t=m&amp;ie=UTF8&amp;hq=COLLEGE+LOUISE+MICHEL,&amp;hnear=Rue+de+Cannes,+59000+Lille,+Nord,+Nord-Pas-de-Calais&amp;ll=50.605837,3.047968&amp;spn=0.006295,0.006295&amp;output=embed" style="padding: 5px;background-color:black;margin-top:20px;"></iframe><br /><small></small>
			<p>
				Adresse :<br /> 
				Collége Louise Michel, 14 rue de Cannes, 59000 LILLE<br />
				Adresse mail : <a href="mailto:ce.0594288r@ac-lille.fr">ce.0594288r@ac-lille.fr</a><br />
				 
				Tel : 03 20 97 23 56<br /> 
				Fax :03 20 97 16 56<br />

			</p>
			</div>
		</div>
	</div>
</div>

<?php require_once '../include/layout/bas.php';?>