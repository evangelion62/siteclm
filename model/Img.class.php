<?php
class Img extends Entity {
	
	//definition de la table Img
	public static $_properties = array (
			//table Img
			'Img'=>array(
					'name'=>array(
							Entity::TYPE=>Entity::VARCHAR,
							Entity::LEN=>Entity::VARCHAR_MAX_LEN,
							Entity::NULL_OR_NOT=>Entity::NOT_NULL,
							Entity::COMMENT=>'nom de l image',
							Entity::KEY=>Entity::UNIQUE_KEY,
					),
					'link'=>array(
							Entity::TYPE=>Entity::VARCHAR,
							Entity::LEN=>Entity::VARCHAR_MAX_LEN,
							Entity::NULL_OR_NOT=>Entity::NOT_NULL,
							Entity::COMMENT=>'chemin relatif depuis la racine'
					),
			),
	);
	
	protected $_name;
	protected $_link;
}