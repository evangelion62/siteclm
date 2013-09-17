<?php
// SESSION DE BASE APPLIQUE SI AUCUNE SESSION
if (!isset($_SESSION)){
	session_name('newSiteClm');
	session_start();
}
$_SESSION=array();
session_destroy();

// REDIRECTION
header("Location: ../index.php");
?>