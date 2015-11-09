<?php
App::uses('AppModel', 'Model');
/**
 * HatesPost Model
 *
 * @property Post $Post
 * @property User $User
 * @property Hate $Hate
 */
class HatesPost extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Post' => array(
			'className' => 'Post',
			'foreignKey' => 'post_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Hate' => array(
			'className' => 'Hate',
			'foreignKey' => 'hate_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
