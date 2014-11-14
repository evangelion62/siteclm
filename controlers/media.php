<?php
switch ($action) {
	case 'allImg':
		$imgManager = new ImgManager($bdd);
		$imgs = $imgManager->getList();
		require_once 'template/media/allimg.php';
	break;
	
	case 'addImg':
		if (isset($_FILES['img']) AND $_FILES['img']['error'] == 0 && !empty($_POST['name']))
		{
			// Testons si le fichier n'est pas trop gros
			if ($_FILES['img']['size'] <= 1000000)
			{
				// Testons si l'extension est autorisée
				$infosfichier = pathinfo($_FILES['img']['name']);
				$extension_upload = $infosfichier['extension'];
				$extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
				if (in_array($extension_upload, $extensions_autorisees))
				{
					// On peut valider le fichier et le stocker définitivement
					$link = 'web/img/uploads/'. basename($_FILES['img']['name']);
					move_uploaded_file($_FILES['img']['tmp_name'], 'web/img/uploads/' . basename($_FILES['img']['name']));
					$_POST['link']=$link;
					$imgManager = new ImgManager($bdd);
					$img = new Img($_POST);
					$imgManager->add($img);
					header('Location: ?controler=media&action=allImg');
				}else{
					$userErrors['imgUploadError']='images invalide';
					$formAction = '?controler=media&action=addImg';
					require_once 'template/media/addimg.php';
				}	
			}else{
				$userErrors['imgUploadError']='images trop volumineuse';
				$formAction = '?controler=media&action=addImg';
				require_once 'template/media/addimg.php';
			}
		}else{
			$userErrors['imgUploadError']='erreur tous les champs du formulaire sont obligatoire';
			$formAction = '?controler=media&action=addImg';
			require_once 'template/media/addimg.php';
		}

	break;
	
	case 'deleteImg':
		if (!empty($_GET['id'])){	
			$imgManager=new ImgManager($bdd);
			$img = $imgManager->get($_GET['id']);
			if (is_file($img->link())){
				unlink($img->link());
			}
			$imgManager->delete($_GET['id']);
			header('Location: ?controler=media&action=allImg');
		}
	break;
	
	default:
		header('Location: ?controler=media&action=allImg');
	break;
}