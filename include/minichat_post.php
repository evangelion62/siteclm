<?php
	require_once 'conect.bdd.php';

	session_name('newSiteClm'); 
	session_start();

	if ($_POST['message'] != "" || isset($_POST['purge'])){
		// Insertion du message à l'aide d'une requête préparée
		$req = $bdd->prepare('INSERT INTO minichat (pseudo, message) VALUES(?, ?)');
		$req->execute(array($_SESSION["login"], $_POST['message']));
		// Redirection
		header("location:../rubrique/espaceprof.php");
		if (isset($_POST['purge'])){
			$req = $bdd->prepare('DELETE FROM minichat');
			$req->execute();
			// Redirection
			header("location:../rubrique/espaceprof.php");
		}
	}
	
	else header("location:../rubrique/espaceprof.php");
?>

