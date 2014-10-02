<?php
//autoload
function chargerClasse($classe)
{
	require_once 'model/'.$classe . '.class.php'; // On inclut la classe correspondante au paramètre passé.
}

spl_autoload_register('chargerClasse');

//initialisation du tableau d'erreur utilisateur
$userErrors=array();

//conection à la base de donnée
require_once 'config/bdd.connect.php';

//définition des varriable controler et action
if (!empty($_GET['controler'])) {
	$_GET['controler']=stripslashes($_GET['controler']);
	$_GET['controler']=htmlspecialchars($_GET['controler']);
	$controler='controlers/'.$_GET['controler'].'.php';
}else{
	$controler='controlers/index.php';
}

if (!empty($_GET['action'])){
	$_GET['action']=stripslashes($_GET['action']);
	$_GET['action']=htmlspecialchars($_GET['action']);
	$action=$_GET['action'];
}else{
	$action='index';
}

//demarage du module de session
session_start();
