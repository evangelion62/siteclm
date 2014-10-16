<?php
abstract class EntityManager {
	protected $_db;
	protected $_entityName;
	
	/*constructeur*/
	public function __construct($db)
	{
		$this->setDb($db);
		$this->_entityName = str_replace('Manager', '', get_class($this));
	}
	
	public function setDb(PDO $db)
	{
		$this->_db = $db;
	}
	
	/*création des tables de l'entité*/
	public function createTable() {
		$entityName = $this->_entityName;
		$entityProperties = $entityName::$_properties;
		foreach ($entityProperties as $table => $properties) {
			
			$propertiesStr = '';
			foreach ($properties as $keyName => $dbParams) {
				$propertiesStr = $propertiesStr.'`'.$keyName.'` '.$dbParams['TYPE'].'('.$dbParams['LEN'].') '.$dbParams['NULL_OR_NOT'].' COMMENT \''.$dbParams['COMMENT'].'\',';
			}
			$key = '';
			foreach ($properties as $keyName => $dbParams){
				if (!empty($dbParams['KEY'])){
					$key = $key.$dbParams['KEY'].' `'.$keyName.'` (`'.$keyName.'`),';
				}
			}
			$q = $this->_db->prepare(
				"CREATE TABLE IF NOT EXISTS `".$table."` (
				id int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'idex primaire',
				".$propertiesStr.$key."
				PRIMARY KEY (id)
				) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1"
			);
			$result = $q->execute();
			$q->closeCursor();
			return $result;
		}
	}
	
	/*CRUD*/
	
	/*CREAT A NEW ENTRY*/
	public function add($entity) {
		if ($this->_entityName == get_class($entity)){
			$entityName = $this->_entityName;
			$entityProperties = $entityName::$_properties;
			foreach ($entityProperties as $table => $properties) {
					
				$propertiesStr = '';
				foreach ($properties as $keyName => $dbParams) {
					$propertiesStr = $propertiesStr.' '.$keyName.' = :'.$keyName.',';
				}
				$propertiesStr = substr($propertiesStr,0,strlen($propertiesStr)-1);
				
				$q = $this->_db->prepare("INSERT INTO `".$table."` SET".$propertiesStr);
				
				foreach ($properties as $keyName => $dbParams) {
					$q->bindValue(':'.$keyName, $entity->$keyName());
				}
				
				$result = $q->execute();
				$q->closeCursor();
				return $result;
			}
		}
		else {
			throw new Exception('l\'entity et l\'entityManager sont incompatible.');
		}
	}
	
	/*renvoi l'entité demandé*/
	public function get($value,$selectKeyName = 'id') {
		$entityName = $this->_entityName;
		$entityProperties = $entityName::$_properties;
		$donnees = array();
		foreach ($entityProperties as $table => $properties) {
			if (is_string($value)){
				$q = $this->_db->query("SELECT * FROM `".$table."` WHERE `".$selectKeyName."` = '".$value."'");
			}else {
				$q = $this->_db->query("SELECT * FROM `".$table."` WHERE `".$selectKeyName."` = ".$value);
			}
			
			$donnees = $q->fetch(PDO::FETCH_ASSOC);
			return new $entityName($donnees);
		}
	}
	
	/*revoi la liste de toutes les entité demandé*/
	public function getList($orderBy='id')
	{
		$entityName = $this->_entityName;
		$entityProperties = $entityName::$_properties;
		$entitys = array();
		
		foreach ($entityProperties as $table => $properties) {
			$q = $this->_db->query("SELECT * FROM `".$table."` ORDER BY ".$orderBy);
			while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
			{
				$entitys[] = new $entityName($donnees);
			}
			return $entitys;
		}
	}
	
	public function update($entity) {
		
		if ($this->_entityName == get_class($entity)){
			$entityName = $this->_entityName;
			$entityProperties = $entityName::$_properties;
			foreach ($entityProperties as $table => $properties) {
					
				$propertiesStr = '';
				foreach ($properties as $keyName => $dbParams) {
					$propertiesStr = $propertiesStr.' '.$keyName.' = :'.$keyName.',';
				}
				$propertiesStr = substr($propertiesStr,0,strlen($propertiesStr)-1);
		
				$q = $this->_db->prepare("UPDATE `".$table."` SET".$propertiesStr." WHERE id = ".$entity->id());
		
				foreach ($properties as $keyName => $dbParams) {
					$q->bindValue(':'.$keyName, $entity->$keyName());
				}
		
				$result = $q->execute();
				$q->closeCursor();
				return $result;
			}
		}
		else {
			throw new Exception('l\'entity et l\'entityManager sont incompatible.');
		}
		
	}
	
	public function delete($value,$selectKeyName = 'id') {
		$entityName = $this->_entityName;
		$entityProperties = $entityName::$_properties;
		foreach ($entityProperties as $table => $properties) {
			if (is_string($value)){
				$this->_db->exec('DELETE FROM `'.$table.'` WHERE '.$selectKeyName.' =\''.$value.'\'');
			}else {
				$this->_db->exec('DELETE FROM `'.$table.'` WHERE '.$selectKeyName.' ='.$value);
			}
			
		}
	}
}