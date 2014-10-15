<?php
class UserManager extends EntityManager{
	
	
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