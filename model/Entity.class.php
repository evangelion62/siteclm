<?php
abstract class Entity{
	/*constante de la class Entity*/
	const VARCHAR = 'varchar';
	const VARCHAR_MAX_LEN = 255;
	const INT = 'int';
	const INT_MAX_LEN = 10;
	const TEXT = 'text';
	const DATETIME = 'datetime';
	const NOT_NULL = 'NOT NULL';
	const COMMENT = 'COMMENT';
	
	/*attributs*/
	protected $_tables = array();//tableau contenant le nom des tables de l'entité
	protected $_attributes = array();//tableau listant et tipant les attribues de la class pour création dynamique des tables
	protected $_id;
	
	/*constructeur*/
	public function __construct(array $donnees){
		$this->hydrate($donnees);
	}
	
	/*fonction d'hydratation - initialise l'objet en appelant les seters*/
	final public function hydrate(array $donnees)
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
	public function tables() {
		return $this->_tables;
	}
	public function attributes() {
		return $this->_attributes;
	}
	
	
	/*seters*/
	public function setId($id){
		$id = (int) $id;
		if ($id > 0){
			$this->_id = $id;
		}
	}
	
}