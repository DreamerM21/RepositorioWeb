<?php

App::uses('AppController', 'Controller');

/**
 * Entradas Controller
 *
 * @property Entrada $Entrada
 * @property PaginatorComponent $Paginator
 */
class EntradasController extends AppController {

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

            $this->Entrada->recursive = 0;
      
            $this->set('entradas', $this->Paginator->paginate());
        
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Entrada->exists($id)) {
            throw new NotFoundException(__('Entrada no valida'));
        }
        $options = array('conditions' => array('Entrada.' . $this->Entrada->primaryKey => $id));
        $this->set('entrada', $this->Entrada->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $data = null;

            $data = array('Entrada' => array(
                    'title' => $this->request->data['Entrada']['title'],
                    'url' => $this->request->data['Entrada']['url'],
                    'categoria' => $this->request->data['Entrada']['categoria'],
                    'idiomas' => $this->request->data['Entrada']['idiomas'],
                    'modelo_uso' => $this->request->data['Entrada']['modelo_uso'],
                    'body' => $this->request->data['Entrada']['body'],
                    'user_id' => $this->data['Entrada']['user_id'] = $this->Auth->User('id')
                ),
            );

            if ($this->Entrada->save($data)) {

                $this->Session->setFlash(__('La entrada se ha guardado.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('No se ha podido guardar la entrada. Intentalo de nuevo.'));
            }
        }
        $users = $this->Entrada->User->find('list');
        $valUsers = $this->Entrada->ValUser->find('list');
        $this->set(compact('users', 'valUsers'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Entrada->exists($id)) {
            throw new NotFoundException(__('Entrada no valida'));
        }
        if ($this->request->is(array('post', 'put'))) {
            $data = null;
            $data = array('Entrada' => array(
                    'id' => $this->request->data['Entrada']['id'],
                    'val_user_id' => $this->data['Entrada']['val_user_id '] = $this->Auth->User('id')
                ),
            );
            if ($this->Entrada->save($data)) {
                $this->Session->setFlash(__('La entrada se ha guardado.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('No se ha podido guardar la entrada. Intentalo de nuevo.'));
            }
        } else {
            $options = array('conditions' => array('Entrada.' . $this->Entrada->primaryKey => $id));
            $this->request->data = $this->Entrada->find('first', $options);
        }
        $users = $this->Entrada->User->find('list');
        $valUsers = $this->Entrada->ValUser->find('list');
        $this->set(compact('users', 'valUsers'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Entrada->id = $id;
        if (!$this->Entrada->exists()) {
            throw new NotFoundException(__('Entrada invalida'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Entrada->delete()) {
            $this->Session->setFlash(__('La entrada se ha eliminado'));
        } else {
            $this->Session->setFlash(__('La entrada no se pudo eliminar. Intentalo de nuevo.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index', 'view');
    }

}
