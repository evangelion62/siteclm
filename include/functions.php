<?php
// CRYPTAGE DE LA CHAINE
function myencrypt ($chaine){
	$salt = "4VPI";
	$mdpEncrypte="";	
	$mdpEncrypte = $salt.$chaine;
	
	return $mdpEncrypte;
};

// RETOURNE TRUE SI VARIABLE DE BONNE TAILLE, TRANSTYPAGE POUR ETRE SÛR DU TYPE
function checkdata($data,$tailleMax=254,$tailleMin=0,$type="string"){
	$variableOk=false;

	if ($type == "float"){
		$data = (float)$data;
		if ($data>=$tailleMin && $date<=$tailleMax){
			$variableOk = true;
		}
	}elseif ($type == "int"){
		$data = (int)$data;
		if ($data>=$tailleMin && $date<=$tailleMax){
			$variableOk = true;
		}
	}elseif ($type == "bool"){
		$data = (bool)$data;
	}elseif ($type == "string"){
		$data = (string)$data;
		if ( strlen($data)>=$tailleMin && strlen($data)<=$tailleMax){
			$variableOk = true;
		}
	}

	return $variableOk;
};
?>