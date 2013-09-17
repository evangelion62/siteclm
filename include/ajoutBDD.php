<?php 
require_once 'conect.bdd.php';
if(basename($_FILES['image']['name'])!= ""){$aleatoire = rand(0, 10000);}
else{$aleatoire="";}
if(isset($_POST['titre']))                  $titre=$_POST["titre"];
if(isset($_POST['contenu']))    			$contenu=$_POST['contenu'];
if(isset($_POST['type']))    				$type=$_POST['type'];
if(isset($_POST['pdf']))    				$pdf=$_POST['pdf'];
if(isset($_POST['utilisateur']))    		$utilisateur=$_POST['utilisateur'];
if(isset($_POST['mdp']))    				$mdp=$_POST['mdp'];
if(isset($_POST['cdt']))    				$cdt=$_POST['cdt'];
if(isset($_POST['grr']))    				$grr=$_POST['grr'];
if(isset($_POST['kwartz']))    				$kwartz=$_POST['kwartz'];
if(isset($_POST['webClasseur']))    		$webClasseur=$_POST['webClasseur'];
if(isset($_POST['adminLevel']))    			$adminLevel=$_POST['adminLevel'];

// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['image']) AND $_FILES['image']['error'] == 0)
{
	// Testons si le fichier n'est pas trop gros
	if ($_FILES['image']['size'] <= 1000000)
	{
		// Testons si l'extension est autorisée
		$infosfichier = pathinfo($_FILES['image']['name']);
		$extension_upload = $infosfichier['extension'];
		$extensions_autorisees = array('jpg', 'jpeg', 'JPG', 'JPEG', 'gif', 'GIF', 'png', 'PNG');
		if (in_array($extension_upload, $extensions_autorisees))
		{
			//on enlève les espaces
			$text=str_replace(' ','',basename($_FILES['image']['name']));
			// On peut valider le fichier et le stocker définitivement
			move_uploaded_file($_FILES['image']['tmp_name'], '../include/image/photo/' . $aleatoire . $text);
		}
		else {header("location:../home/");
		return false;}
	}
}

if (isset($_FILES['pdf']) AND $_FILES['pdf']['error'] == 0)
{
	// Testons si le fichier n'est pas trop gros
	if ($_FILES['pdf']['size'] <= 1000000)
	{
		// Testons si l'extension est autorisée
		$infosfichier = pathinfo($_FILES['pdf']['name']);
		$extension_upload = $infosfichier['extension'];
		$extensions_autorisees = array('pdf');
		if (in_array($extension_upload, $extensions_autorisees))
		{
			//on enlève les espaces
			$text=str_replace(' ','',basename($_FILES['pdf']['name']));
			// On peut valider le fichier et le stocker définitivement
			move_uploaded_file($_FILES['pdf']['tmp_name'], '../include/pdf/' . $aleatoire . $text);
		}
		else {header("location:../home/");
		return false;}
	}
}

if($type != "revue"){
	if ($type == "user") {
		if(empty($utilisateur)){
			header("location:../rubrique/manageUsers.php?edit=&result=incomplet");
			exit();	
		} 
	}else{
		if(empty($titre) OR empty($type)){
			header("location:../home/index.php?ajout=Article&result=incomplet");
			exit();	
		} 
	}
}else{
	if(empty($titre)){
		header("location:../home/index.php?ajout=Article&result=incomplet");
		exit();	
	}
}

// VERIFICATION DU CHAMP IMAGE POUR CLG EN IMAGE
if($type=="clgEnImage" && basename($_FILES['image']['name'])== ""){
	header("location:../home/index.php?ajout=Article&result=incomplet");
}
// VERIFICATION DU CHAMP IMAGE POUR REVUE DE PRESSE
if($type=="revue" && basename($_FILES['pdf']['name'])== ""){
	header("location:../home/index.php?ajout=Article&result=incomplet");
}



// SI TOUT EST OK
else {
        try {  
        	
           $d=array(
                'titre' => $titre,
                'contenu' => $contenu,
           		'image' => "../include/image/photo/".$aleatoire.$text
           );
           $d2=array(
                'titre' => $titre,
           		'pdf' => "../include/pdf/".$aleatoire.$text
           );
           $d3=array(
                'username' => $utilisateur,
           		'password' => $mdp,
           		'cdt' => $cdt,
           		'grr' => $grr,
           		'kwartz' => $kwartz,
           		'webClasseur' => $webClasseur,
           		'adminLevel' => $adminLevel,
           );

           if($type == "articleProf"){
           		$req = $bdd->prepare('INSERT INTO articleProf (titre, contenu, date_creation, image) VALUES(:titre, :contenu, NOW(), :image )');
          		$req->execute($d);
          		header("location:../rubrique/espaceprof.php");
           }
		   else if($type == "article"){
		   		$req = $bdd->prepare('INSERT INTO article (titre, contenu, date_creation, image) VALUES(:titre, :contenu, NOW(), :image )');
		   		$req->execute($d);
		   		header("location:../rubrique/actu.php");
		   }
		   else if($type == "clgEnImage"){ 
			   	$req = $bdd->prepare('INSERT INTO evenement(titre, commentaire, image) VALUES(:titre, :contenu, :image)');
			   	$req->execute($d);
			   	header("location:../rubrique/clgEnImages.php");
		   }
		   else if($type == "revue"){
			   	$req = $bdd->prepare('INSERT INTO revueDePresse(titre, source) VALUES(:titre, :pdf)');
			   	$req->execute($d2);
			   	header("location:../rubrique/revueDePresse.php");
		   }
		   else if($type == "user"){
			   	$req = $bdd->prepare('INSERT INTO user(nom_utilisateur, password, cahierDeText, GRR, pKwartz, webClasseur, adminLevel) VALUES(:username, :password, :cdt, :grr, :kwartz, :webClasseur, :adminLevel)');
			   	$req->execute($d3);
			   	header("location:../rubrique/manageUsers.php");
			}
        }

        catch(Exception $e) {echo '<p>Erreur lors de l\'insertion : '.$e->getMessage().'</p>';}
}
?>