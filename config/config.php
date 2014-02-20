<?php
//autoload
function chargerClasse($classe)
{
	require_once 'model/'.$classe . '.class.php'; // On inclut la classe correspondante au paramètre passé.
}

spl_autoload_register('chargerClasse');

//bdd config
$bddConfig 	= 	array				(
		'host'	=>	'localhost'	,
		'dbname'=>	'siteclm'		,
		'user'	=>	'root'			,
		'pwd'		=>	''					);

//connexion à la bdd
try
{
	$bdd = new PDO('mysql:host='.$bddConfig['host'].';dbname='.$bddConfig['dbname'], $bddConfig['user'], $bddConfig['pwd']);
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}

//supression des données de connexion
$bddConfig = array();

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
