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
	protected $_name;
	protected $_pass;
	protected $_mail;
}