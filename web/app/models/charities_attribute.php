<?php
class CharitiesAttribute extends AppModel {
	var $name = 'CharitiesAttribute';
	var $primaryKey = 'attributevalue_id';
	var $validate = array(
		'charity_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'attribute_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'attributevalue_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Charity' => array(
			'className' => 'Charity',
			'foreignKey' => 'charity_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Attribute' => array(
			'className' => 'Attribute',
			'foreignKey' => 'attribute_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Attributevalue' => array(
			'className' => 'Attributevalue',
			'foreignKey' => 'attributevalue_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>