<?php
require_once '../include/functions.php';

 if (!isset($_SESSION)){
 session_name('newSiteClm'); 
 session_start();
 }

// VARRIABLE D'ERREUR
$nbErreur=0;

// VERRIFICATION DES VARIABLES
if (isset($_POST['id'])&&isset($_POST['pass']))
{
	if (!checkdata($_POST['id'],25,4))
	{
		$nbErreur++;
		$_SESSION['idErreur']="l'identifiant doit étre compris entre 4 et 25 caractères";
	}
	if (!checkdata($_POST['pass'],25,4))
	{
		$nbErreur++;
		$_SESSION['passErreur']="le mot de passe doit étre compris entre 4 et 25 caractères";
	}
}

if (isset($_POST['id'])&&isset($_POST['pass'])&& $nbErreur==0)
{
	//CONNEXION BDD
	require_once '../include/conect.bdd.php';
	//PREPARATION DE LA REQUETE
	$req = $bdd->prepare('SELECT password, adminLevel FROM user WHERE nom_utilisateur = :id');
	$req->execute(array('id' => $_POST['id']));

	// SI CORRESPONDANCE DANS LA BDD
	if ($donnée = $req->fetch())
	{
		// SI BON MDP
		if($donnée["password"] == $_POST['pass'])
		{
			// CREATION DES VARIABLES DE SESSION
			$_SESSION["login"]=$_POST['id'];
			$_SESSION["estConnecte"]=true;
			$_SESSION["passEncrypt"]=myencrypt($donnée['password']);
			$_SESSION["adminlvl"]=$donnée['adminLevel'];

			header("Location: ../index.php");
		}
		// SI MAUVAIS MDP
		else{
			$nbErreur++;
			$_SESSION['passErreur']="mot de passe incorrect";
			header("Location: ../index.php");
		}
	}else{
		$nbErreur++;
		$_SESSION['idErreur']="nom d'utilisateur incorrect";
		header("Location: ../index.php");
	}

	$req->closeCursor();

}
// SI ERREUR REDIRECTION
else{
	header("Location: ../index.php");
}
?>