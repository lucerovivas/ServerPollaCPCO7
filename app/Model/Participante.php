<?php
App::uses('AppModel', 'Model');
/**
 * Participante Model
 *
 */
class Participante extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'ganador' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
