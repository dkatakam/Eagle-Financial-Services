<?php
class Customer extends AppModel {
	public $hasMany = array('Investments','Stocks');
	
	public $displayField = 'name';
	
	public $validate = array(
	'id' => array(
		'blank' => array(
			'rule' => array('blank'),
			'message' => 'ID Cannot be blank',
			
		),
		'notEmpty' => array(
		'rule' => array('notEmpty'),
		'message' =>'ID cannot be empty',
		
		
		),
	),
	'name' => array(
	'notEmpty' => array(
		'rule' => array('notEmpty'),
		'message' =>'Name cannot be empty',
		
		
		),
	),

	);
}