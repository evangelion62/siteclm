<?php
class UserInfo extends Entity{
	//definition de la structure base de donné
	public static $_properties = array (
			//table user
			'UserInfo'=>array(
					'prenom'=>array(
							Entity::TYPE=>Entity::VARCHAR,
							Entity::LEN=>Entity::VARCHAR_MAX_LEN,
							Entity::NULL_OR_NOT=>Entity::NOT_NULL,
							Entity::COMMENT=>'prenom d utilisateur',
					),
					'nom'=>array(
							Entity::TYPE=>Entity::VARCHAR,
							Entity::LEN=>Entity::VARCHAR_MAX_LEN,
							Entity::NULL_OR_NOT=>Entity::NOT_NULL,
							Entity::COMMENT=>'nom de famille de l utilisateur'
					),
					'userId'=>array(
							Entity::TYPE=>Entity::VARCHAR,
							Entity::LEN=>Entity::VARCHAR_MAX_LEN,
							Entity::NULL_OR_NOT=>Entity::DEFAULT_NULL,
							Entity::COMMENT=>'id de la table user'
					),
			),
	);
	//attributs
	protected $_prenom;
	protected $_nom;
	protected $_userId;
}