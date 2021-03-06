<?php

/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    public $components = array(
        'Acl',
        'Auth' => array(
            'authorize' => array(
                'Actions' => array('actionPath' => 'controllers')
            )
        ),
        'Session'
    );
    public $helpers = array('Html', 'Form', 'Session');
    public $data = array();

    public function beforeFilter() {
        $this->set('authUser', $this->Auth->user());

//Configure AuthComponent
        $this->Auth->loginAction = array(
            'controller' => 'users',
            'action' => 'login'
        );
        $this->Auth->logoutRedirect = array(
            'controller' => 'entradas',
            'action' => 'index'
        );
        $this->Auth->loginRedirect = array(
            'controller' => 'entradas',
            'action' => 'index'
        );
//        $this->Auth->loginRedirect = array(
//            'controller' => 'mods',
//            'action' => 'add'
//        );
        $this->Auth->allow('display');
    }

}
