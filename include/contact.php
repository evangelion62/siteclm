<?php 
function Email($adresse) {
	$Syntaxe='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';
	if(preg_match($Syntaxe,$adresse)) {return true;}
	else {return false;}
}

$mailDest = "124894@supinfo.com,sebastien.ronger.evangelion@gmail.com,jmd.lm@nordnet.fr";

if(isset($_POST['nom']))                  	$nom=(ucfirst(strtolower($_POST["nom"])));
if(isset($_POST['prenom']))            		$prenom=(ucfirst(strtolower($_POST['prenom'])));
if(isset($_POST['sujet']))					$sujet=(ucfirst(strtolower($_POST['sujet'])));
if(isset($_POST['mail']))					$mail=$_POST['mail'];
if(isset($_POST['contenu']))				$contenu=$_POST['contenu'];

// VERIFICATION DES CHAMPS VIDES
if(empty($nom) OR empty($prenom) OR empty($sujet) OR empty($contenu) OR empty($mail)){
	header("location:../index.php?ajout=Mail&result=incomplet");
}

// VERIFICATION DE L'ADRESSE MAIL
else if (Email($mail) == false) {
	header('Location:../index.php?inscription!=mail');
}

else {	
	// On filtre les serveurs qui rencontrent des bogues.
	if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) 
	{
		$passage_ligne = "\r\n";
		$contenu.="\r\n\nAdresse mail expediteur : ".$mail;
		$contenu.="\r\nNom expediteur : ".$nom;
		$contenu.="\r\nPrenom expediteur : ".$prenom;
	}
	
	else {
		$passage_ligne = "\n";
		$contenu.="\n\nAdresse mail expediteur : ".$mail;
		$contenu.="\nNom expediteur : ".$nom;
		$contenu.="\nPrenom expediteur : ".$prenom;
	}
	// Création de la boundary
	$boundary = "-----=".md5(rand());
	// Création du header
	$header="From: \"".$nom." ".$prenom."\"<".$mail.">".$passage_ligne;
	$header.= "Reply-to: \"".$nom." ".$prenom."\"<".$mail.">".$passage_ligne;
	$header.= "MIME-Version: 1.0".$passage_ligne;
	$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
	// Envoi du mail
	mail($mailDest,$sujet,$contenu,$header);
	//echo $nom." ".$prenom." ".$sujet." ".$mail." ".$contenu;
	header('Location:../index.php?mail=ok');
}
?>