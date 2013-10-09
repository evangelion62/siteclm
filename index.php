<?php
//inclusion du fichier de configuration
require_once 'config/config.php';

//inclusion du bon controler
if (is_file($controler)){
	require_once $controler;
}else{
	echo $controler;
}