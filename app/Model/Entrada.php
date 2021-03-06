<?php

App::uses('AppModel', 'Model');

/**
 * Entrada Model
 *
 * @property User $User
 * @property ValUser $ValUser
 * @property Mod $Mod
 */
class Entrada extends AppModel {

    /**
     * Validation rules
     *
     * @var array
     */

    public $validate = array(
        'user_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            'message' => 'Campo requerido',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'title' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            'message' => 'Campo requerido',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'url' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            'message' => 'Campo requerido',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'categoria' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            'message' => 'Campo requerido',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'idiomas' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            'message' => 'Campo requerido',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'modelo_uso' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            'message' => 'Campo requerido',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'body' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            'message' => 'Campo requerido',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'ValUser' => array(
            'className' => 'User',
            'foreignKey' => 'user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'Mod' => array(
            'className' => 'Mod',
            'foreignKey' => 'entrada_id',
            'dependent' => true,
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

}
