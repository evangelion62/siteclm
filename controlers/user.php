<?php

switch ($action){
	case 'addUser':
		require_once 'template/user/adduser.php';
	break;
	
	case 'listUser':
		require_once 'template/user/listuser.php';
	break;
	
	case 'updateUser':
		require_once 'template/user/updateuser.php';
	break;
	
	case 'deleteUser':
		require_once 'template/user/deleteuser.php';
	break;
		
	case 'connectUser':
		require_once 'template/user/connectuser.php';
	break;
	
	case 'disconnectUser':
		require_once 'template/user/disconnectuser.php';
	break;
	
	default:
		
	break;
}