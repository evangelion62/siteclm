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
	$_GET['controler']='install';
	$_GET['action']='bddFirstConfig';
	$userErrors['bdderror']='Mauvaise configuration de la base de données. Veuillez vérifier vos informations!';
}

//supression des données de connexion
$bddManager = null;
