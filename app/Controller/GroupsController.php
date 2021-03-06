<?php

App::uses('AppController', 'Controller');

/**
 * Groups Controller
 *
 * @property Group $Group
 * @property PaginatorComponent $Paginator
 */
class GroupsController extends AppController {

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
        $this->set('authUser', $this->Auth->user());
        $this->Group->recursive = 0;
        $this->set('groups', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Group->exists($id)) {
            throw new NotFoundException(__('Grupo no valido'));
        }
        $options = array('conditions' => array('Group.' . $this->Group->primaryKey => $id));
        $this->set('group', $this->Group->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Group->create();
            if ($this->Group->save($this->request->data)) {
                $this->Session->setFlash(__('El grupo se ha guardado.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('El grupo no ha podido ser guardado. Intentalo de nuevo.'));
            }
        }
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Group->exists($id)) {
            throw new NotFoundException(__('Grupo no valido'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Group->save($this->request->data)) {
                $this->Session->setFlash(__('El grupo se ha guardado.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('El grupo no ha podido ser guardado. Intentalo de nuevo.'));
            }
        } else {
            $options = array('conditions' => array('Group.' . $this->Group->primaryKey => $id));
            $this->request->data = $this->Group->find('first', $options);
        }
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Group->id = $id;
        if (!$this->Group->exists()) {
            throw new NotFoundException(__('Grupo no valido'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Group->delete()) {
            $this->Session->setFlash(__('El grupo ha sido eliminado.'));
        } else {
            $this->Session->setFlash(__('El grupo no ha podido ser eliminado. Intentalo de nuevo.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
public function beforeFilter() {
parent::beforeFilter();

// For CakePHP 2.1 and up
$this->Auth->allow();
}

}
