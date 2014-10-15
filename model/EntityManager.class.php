<?php
abstract class EntityManager {
	protected $_db;
	
	/*constructeur*/
	public function __construct($db)
	{
		$this->setDb($db);
	}
	
	public function setDb(PDO $db)
	{
		$this->_db = $db;
	}
	
	/*création des tables de l'entité*/
	public function createTable() {
		$entityName = str_replace('Manager', '', get_class($this));
		$entityProperties = $entityName::$_properties;
		foreach ($entityProperties as $table => $properties) {
			
			$propertiesStr = '';
			foreach ($properties as $keyName => $dbParams) {
				$propertiesStr = $propertiesStr.'`'.$keyName.'` '.$dbParams['TYPE'].'('.$dbParams['LEN'].') '.$dbParams['NULL_OR_NOT'].' COMMENT \''.$dbParams['COMMENT'].'\',';
			}
			$q = $this->_db->prepare(
				"CREATE TABLE IF NOT EXISTS `".$table."` (
				id int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'idex primaire',
				".$propertiesStr."
				PRIMARY KEY (id)
				) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1"
			);
			$q->execute();
			echo $q->queryString;
			$q->closeCursor();
		}
	}
}