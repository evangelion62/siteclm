<?php
class UserAuth extends Entity{
	//definition de la structure base de donné
	public static $_properties = array (
			//table user
			'UserAuth'=>array(
					'token'=>array(
							Entity::TYPE=>Entity::VARCHAR,
							Entity::LEN=>Entity::VARCHAR_MAX_LEN,
							Entity::NULL_OR_NOT=>Entity::NOT_NULL,
							Entity::COMMENT=>'token d authentification'
					),
					'userid'=>array(
							Entity::TYPE=>Entity::INT,
							Entity::LEN=>Entity::INT_MAX_LEN,
							Entity::NULL_OR_NOT=>Entity::NOT_NULL,
							Entity::COMMENT=>'id de la table user'
					),
			),
	);
	//attributs
	protected $_token;
	protected $_userid;
}