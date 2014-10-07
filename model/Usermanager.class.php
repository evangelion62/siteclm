<?php
class UserManager {
	private $_db;
	
	/*constructeur*/
	public function __construct($db)
	{
		$this->setDb($db);
	}
	
	public function setDb(PDO $db)
	{
		$this->_db = $db;
	}
	public function createTable() {
		$q= $this->_db->prepare(
			"CREATE TABLE IF NOT EXISTS `user` (
			id int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'idex primaire',
			`name` varchar(255) NOT NULL COMMENT 'nom d''utilisateur',
			pass varchar(255) NOT NULL COMMENT 'mot de passe',
			mail varchar(255) DEFAULT NULL COMMENT 'e mail',
			PRIMARY KEY (id)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1"
		);
		$q->execute();
	}
	/*CRUD*/
	public function add(User $user) {
		$q = $this->_db->prepare("INSERT INTO user SET name = :name, pass = :pass, mail = :mail");
		
		$q->bindValue(':name', $user->name());
		$q->bindValue(':pass', $user->pass());
		$q->bindValue(':mail', $user->mail());
		
		$q->execute();
	}
	
	public function get($id) {
		$id = (int) $id;
		
		$q = $this->_db->query("SELECT * FROM user WHERE id =".$id);
		$donnees = $q->fetch(PDO::FETCH_ASSOC);
		
		return new User($donnees);
	}
	
	public function getList()
	{
		$users = array();
		
		$q = $this->_db->query('SELECT * FROM user ORDER BY name');
		while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			$users[] = new User($donnees);
		}
		return $users;
	}
	
	public function update(User $user) {
		$q = $this->_db->prepare("UPDATE user SET name = :name, pass = :pass, mail = :mail WHERE id = :id");
		
		$q->bindValue(':name', $user->name());
		$q->bindValue(':pass', $user->pass());
		$q->bindValue(':mail', $user->mail());
		$q->bindValue(':id', $user->id());
		
		$q->execute();
	}
	
	public function delete($id) {
		$this->_db->exec('DELETE FROM user WHERE id ='.$id);
	}
	
}