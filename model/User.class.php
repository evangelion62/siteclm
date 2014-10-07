<?php
class User {
	private $_id;
	private $_name;
	private $_pass;
	private $_mail;
	
	/*constructeur*/
	public function __construct(array $donnees){
		$this->hydrate($donnees);
	}
	
	/*fonction d'hydratation - initialise l'objet en appelant les seters*/
	public function hydrate(array $donnees)
	{
		foreach ($donnees as $key => $value)
		{
			// On récupère le nom du setter correspondant à l'attribut.
			$method = 'set'.ucfirst($key);
	
			// Si le setter correspondant existe.
			if (method_exists($this, $method))
			{
				// On appelle le setter.
				$this->$method($value);
			}
		}
	}
	
	/*geters*/
	public function id(){
		return $this->_id;
	}
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
	public function setId($id){
		$id = (int) $id;
		if ($id > 0){
			$this->_id = $id;
		}
	}
	
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