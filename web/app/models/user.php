<?php
class User extends AppModel {
	var $name = 'User';
	var $displayField = 'fb_id';
	var $validate = array(
		'fb_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasAndBelongsToMany = array(
		'Attribute' => array(
			'className' => 'Attribute',
			'joinTable' => 'users_attributes',
			'foreignKey' => 'user_id',
			'associationForeignKey' => 'attribute_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Charity' => array(
			'className' => 'Charity',
			'joinTable' => 'users_charities',
			'foreignKey' => 'user_id',
			'associationForeignKey' => 'charity_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
?>