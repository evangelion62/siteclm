<?php

require_once 'conect.bdd.php';
if(isset($_POST['titre']))    				$titre=$_POST['titre'];
if(isset($_POST['type']))    				$type=$_POST['type'];
if(isset($_POST['userID']))    				$userID=$_POST['userID'];

// VERIFICATION DES CHAMPS VIDES
if(empty($type)){
	header("location:../home/index.php?ajout=Suppression&result=incorrect");
}

else {
	try {
		$d=array('titre' => $titre);
		$d2=array('ID' => $userID);
		
		
		if($type == "articleProf"){
			$req = $bdd->prepare('DELETE FROM articleProf WHERE titre = :titre');
			$req->execute($d);
			header("location:../rubrique/espaceprof.php");
		}
		else if($type == "article"){
			$req = $bdd->prepare('DELETE FROM article WHERE id = :titre');
			$req->execute($d);
			header("location:../rubrique/actu.php");
		}
		else if($type == "clgEnImage"){
			$req = $bdd->prepare('DELETE FROM evenement WHERE titre = :titre');
			$req->execute($d);
			header("location:../rubrique/clgEnImages.php");
		}
		else if($type == "revue"){
			$req = $bdd->prepare('DELETE FROM revueDePresse WHERE titre = :titre');
			$req->execute($d);
			header("location:../rubrique/revueDePresse.php");
		}
		else if($type == "user"){
			$req = $bdd->prepare('DELETE FROM user WHERE id = :ID');
			$req->execute($d2);
			header("location:../rubrique/manageUsers.php");
		}
	}
	catch(Exception $e) {echo '<p>Erreur lors de la suppression : '.$e->getMessage().'</p>';}
}
?>