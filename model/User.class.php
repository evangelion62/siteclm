<?php
class User {
	private $_id;
	private $_name;
	private $_pass;
	private $_mail;
	
	/*constructeur*/
	public function __construct(){
		
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
		
	}
	/*seters*/
	
}