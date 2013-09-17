<?php 
require_once 'conect.bdd.php';

if (!isset($_SESSION)){
	session_name('newSiteClm'); 
	session_start();
}

if(isset($_POST['SiteCollegePassword']))	$SiteCollegePassword = $_POST["SiteCollegePassword"];

if(isset($_POST['usernameCDT']))			$usernameCDT = $_POST["usernameCDT"];
if(isset($_POST['PasswordCDT']))			$PasswordCDT = $_POST["PasswordCDT"];

if(isset($_POST['usernameGRR']))			$usernameGRR = $_POST["usernameGRR"];
if(isset($_POST['PasswordGRR']))			$PasswordGRR = $_POST["PasswordGRR"];

if(isset($_POST['usernamePKwartz']))		$usernamePKwartz = $_POST["usernamePKwartz"];
if(isset($_POST['PasswordPKwartz']))		$PasswordPKwartz = $_POST["PasswordPKwartz"];

if(isset($_POST['usernameWebClasseur']))	$usernameWebClasseur = $_POST["usernameWebClasseur"];
if(isset($_POST['passwordWebClasseur']))	$passwordWebClasseur = $_POST["passwordWebClasseur"];

$cahierDeText = $usernameCDT.";".$PasswordCDT;
$grr = $usernameGRR.";".$PasswordGRR;
$PKwartz = $usernamePKwartz.";".$PasswordPKwartz;
$webClasseur = $usernameWebClasseur.";".$passwordWebClasseur;

try {  
	$d=array(                
		'passwordSite' => $SiteCollegePassword,
		'cdt' => $cahierDeText,
		'grr' => $grr,
		'kwartz' => $PKwartz,
		'webClasseur' => $webClasseur,
		'username' => $_SESSION["login"]
	);
           	             

	$req = $bdd->prepare('UPDATE user SET password = :passwordSite, cahierDeText = :cdt, GRR = :grr, pKwartz = :kwartz, webClasseur = :webClasseur WHERE nom_utilisateur = :username');
	$req->execute($d);
	header("location:../rubrique/manageCompte.php");

} catch(Exception $e) {
	echo '<p>Erreur lors de l\'insertion : '.$e->getMessage().'</p>';
}
?>