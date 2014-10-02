<?php
//bdd config
$bddManager = new BddManager('config/bdd.config.xml');

//connexion à la bdd
try
{
	$bdd = new PDO('mysql:host='.$bddManager->host().';dbname='.$bddManager->dbname(), $bddManager->user(), $bddManager->pwd());
}
catch (Exception $e)
{
	$_GET['controler']='error';
	$_GET['action']='bddBadConfig';
	$userErrors['bdderror']='mauvaise configuration de la base de données. veuillé verifié !';
}

//supression des données de connexion
$bddManager = null;
