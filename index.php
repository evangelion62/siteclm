<?php
	$timestart = microtime(true);
	require_once ('config/config.php');

	if (is_file($controler)){
		require_once $controler;
	}else{
		require_once ('controlers/index.php');
	}
	
	$executTime = microtime(true) - $timestart;
	echo 'temp d\'execution :'.$executTime;