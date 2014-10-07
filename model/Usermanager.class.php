<?php
class UserManager {
	private $db;
	
	/*constructeur*/
	public function __construct($db)
	{
		$this->setDb($db);
	}
	
	public function setDb(PDO $db)
	{
		$this->_db = $db;
	}
	/*CRUD*/
	public function add($param) {
		;
	}
}