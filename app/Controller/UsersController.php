<?php

App::uses('AppController', 'Controller');

/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Usuario no valido'));
        }
        $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
        $this->set('user', $this->User->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {


        if ($this->request->is('post')) {
            $data = null;

            $data = array('User' => array(
                    'username' => $this->request->data['User']['username'],
                    'password' => $this->request->data['User']['password'],
                    'nombre_completo' => $this->request->data['User']['nombre_completo'],
                    'group_id' => $this->data['User']['group_id'] = 4,
                    ),
            );

            if ($this->User->save($data)) {
                $this->Session->setFlash(__('El usuario se ha guardado'));
                $this->redirect(array('controller' => 'entradas', 'action' => 'index'));
            } else {
                $this->Session->setFlash(__('No se ha podido guardar el usuario. Intentalo de nuevo.'));
            }
        }
        $groups = $this->User->Group->find('list');
        $this->set(compact('groups'));
    }


    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Usuario no valido'));
        }
        if ($this->request->is(array('post', 'put'))) {
                        $data = null;
            $data = array('Entrada' => array(
                    'group_id' => $this->request->data['User']['group_id'],
                ),
            );
            if ($this->User->save($data)) {
                $this->Session->setFlash(__('El usuario ha sido Modificado.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('No se ha podido guardar el usuario. Intentalo de nuevo.'));
            }
        } else {
            $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
            $this->request->data = $this->User->find('first', $options);
        }
        $groups = $this->User->Group->find('list');
        $this->set(compact('groups'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Usuario no valido.'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->User->delete()) {
            $this->Session->setFlash(__('El usuario ha sido eliminado.'));
        } else {
            $this->Session->setFlash(__('El usuario no pudo eliminarse. Intentalo de nuevo.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function login() {
        if ($this->request->is('post')) {
            if ($this->Session->read('Auth.User')) {
                $this->Session->setFlash('Estas dentro.');
                return $this->redirect('/');
            }
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirect());
            }
            $this->Session->setFlash(__('El usuario o password no es correcto'));
        }
    }

    public function logout() {
        $this->Session->setFlash('Adios');
        $this->redirect($this->Auth->logout());
    }

    public function beforeFilter() {
        parent::beforeFilter();

        $this->Auth->allow('add');

//        $this->Auth->allow('initDB'); // We can remove this line after we’re finished
    }

    public function initDB() {
        $group = $this->User->Group;
// Allow admins to everything
        $group->id = 1;
        $this->Acl->allow($group, 'controllers');
// allow managers to posts and widgets
        $group->id = 2;
        $this->Acl->deny($group, 'controllers');
        $this->Acl->allow($group, 'controllers/Entradas');
        //$this->Acl->allow($group, 'controllers/Widgets');
        $this->Acl->allow($group, 'controllers/Mods');
        $this->Acl->allow($group, 'controllers/users/logout');
// allow users to only add and edit on posts and widgets
        $group->id = 3;
        $this->Acl->deny($group, 'controllers');
        $this->Acl->allow($group, 'controllers/Entradas/add');
        //$this->Acl->allow($group, 'controllers/Entradas/edit');
        $this->Acl->allow($group, 'controllers/Mods/add');
        // $this->Acl->allow($group, 'controllers/Mods/edit');
        //$this->Acl->allow($group, 'controllers/Widgets/add');
        //$this->Acl->allow($group, 'controllers/Widgets/edit');
// allow basic users to log out

        $this->Acl->allow($group, 'controllers/users/logout');
$group->id = 4;
$this->Acl->allow($group, 'controllers/users/logout');
// we add an exit to avoid an ugly "missing views" error message
        echo "all done";
        exit;
    }

}
