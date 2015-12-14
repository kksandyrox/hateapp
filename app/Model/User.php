<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property HatesPost $HatesPost
 * @property Post $Post
 * @property Post $Post
 */
class User extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'HatesPost' => array(
			'className' => 'HatesPost',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Post' => array(
			'className' => 'Post',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Post' => array(
			'className' => 'Post',
			'joinTable' => 'posts_users',
			'foreignKey' => 'user_id',
			'associationForeignKey' => 'post_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

	public $actsAs = array(
		'Upload.Upload' => array(
			'image' => array(
				'fields' => array(
					'dir' => 'dir'
					),
				'thumbnailSizes' => array(
					'xvga' => '1024x768',
					'sbp' => '220x150',
					'dis' => '420x250',
					'vga' => '149x178',
					'thumb' => '128x128',
					'icon' => '82x82'          
					),
				'thumbnailMethod' => 'php'
				)
			)
		);

	public function beforeSave($options=array())
	{
		parent::beforeSave($options);
			if (isset($this->data['User']['password'])) {
			$this->data['User']['password'] = AuthComponent::password($this->data['User']['password']); 
		}
	return true;
	}

	public function checkRequired($requiredFields, $data) {
		$param = true;
		foreach ($requiredFields as $item) {
			if(empty($data['User'][$item])) {
				$param = false;
			}
		}
		return $param;
	}

}
