<?php
class User extends Entity{
	//definition de la structure base de donné
	public static $_properties = array (
		//table user
		'user'=>array(
			'name'=>array(
				Entity::TYPE=>Entity::VARCHAR,
				Entity::LEN=>Entity::VARCHAR_MAX_LEN,
				Entity::NULL_OR_NOT=>Entity::NOT_NULL,
				Entity::COMMENT=>'nom d utilisateur',
				Entity::KEY=>Entity::UNIQUE_KEY,
			),
			'pass'=>array(	
				Entity::TYPE=>Entity::VARCHAR,
				Entity::LEN=>Entity::VARCHAR_MAX_LEN,
				Entity::NULL_OR_NOT=>Entity::NOT_NULL,
				Entity::COMMENT=>'mot de passe'
			),
			'mail'=>array(	
				Entity::TYPE=>Entity::VARCHAR,
				Entity::LEN=>Entity::VARCHAR_MAX_LEN,
				Entity::NULL_OR_NOT=>Entity::DEFAULT_NULL,
				Entity::COMMENT=>'mot de passe'
			),
		),
	);
	//attributs
	private $_name;
	private $_pass;
	private $_mail;
	
	/*geters*/
	public function name(){
		return $this->_name;
	}
	public function pass(){
		return $this->_pass;
	}
	public function mail(){
		return $this->_mail;
	}
	
	/*seters*/
	
	public function setName($name){
		if (is_string($name) && strlen($name)<254 && !empty($name)){
			$this->_name=$name;
		}
	}
	
	public function setPass($pass){
		if (is_string($pass) && strlen($pass)<254 && !empty($pass)){
			$this->_pass=$pass;
		}
	}
	
	public function setMail($mail){
		if (is_string($mail) && strlen($mail)<254 && !empty($mail)){
			$this->_mail=$mail;
		}
	}
}