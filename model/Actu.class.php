<?php
class Actu extends Entity{
	//definition de la structure base de donné
	public static $_properties = array (
			//table actu
			'actu'=>array(
					'name'=>array(
							Entity::TYPE=>Entity::VARCHAR,
							Entity::LEN=>Entity::VARCHAR_MAX_LEN,
							Entity::NULL_OR_NOT=>Entity::NOT_NULL,
							Entity::COMMENT=>'nom d actu',
							Entity::KEY=>Entity::UNIQUE_KEY,
					),
					'content'=>array(
							Entity::TYPE=>Entity::TEXT,
							Entity::LEN=>1000,
							Entity::NULL_OR_NOT=>Entity::DEFAULT_NULL,
							Entity::COMMENT=>'contenu d actu',
					),
						
			),
	);
	//attributs
	protected $_name;
	protected $_content;
}