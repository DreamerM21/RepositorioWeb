<?php

App::uses('AppController', 'Controller');

/**
 * Mods Controller
 *
 * @property Mod $Mod
 * @property PaginatorComponent $Paginator
 */
class ModsController extends AppController {

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
        $this->Mod->recursive = 0;
        $this->set('mods', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Mod->exists($id)) {
            throw new NotFoundException(__('Modificacion no valida'));
        }
        $options = array('conditions' => array('Mod.' . $this->Mod->primaryKey => $id));
        $this->set('mod', $this->Mod->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {

        if ($this->request->is('post')) {
            $data = null;

            $data = array('Mod' => array(
                    'entrada_id' => $this->request->data['Mod']['entrada_id'],
                    'title' => $this->request->data['Mod']['title'],
                    'url' => $this->request->data['Mod']['url'],
                    'categoria' => $this->request->data['Mod']['categoria'],
                    'idiomas' => $this->request->data['Mod']['idiomas'],
                    'modelo_uso' => $this->request->data['Mod']['modelo_uso'],
                    'body' => $this->request->data['Mod']['body'],
                    'user_id' => $this->data['Mod']['user_id'] = $this->Auth->User('id')
                ),
            );

            if ($this->Mod->save($data)) {

                $this->Session->setFlash(__('La modificacion se ha guardado.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('No se ha podido guardar la modificacion. Intentalo de nuevo.'));
            }
        }
        $entradas = $this->Mod->Entrada->find('list');
        $users = $this->Mod->User->find('list');
        $valUsers = $this->Mod->ValUser->find('list');
        $this->set(compact('entradas', 'users', 'valUsers'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Mod->exists($id)) {
            throw new NotFoundException(__('Modificacion no valida'));
        }
        if ($this->request->is(array('post', 'put'))) {

            $data = null;
            $data = array('Mod' => array(
                    'id' => $this->request->data['Mod']['id'],
//                    'entrada_id' => $this->request->data['Mod']['entrada_id'],
//                    'title' => $this->request->data['Mod']['title'],
//                    'url' => $this->request->data['Mod']['url'],
//                    'categoria' => $this->request->data['Mod']['categoria'],
//                    'idiomas' => $this->request->data['Mod']['idiomas'],
//                    'modelo_uso' => $this->request->data['Mod']['modelo_uso'],
//                    'body' => $this->request->data['Mod']['body'],
                    'val_user_id' => $this->data['Mod']['val_user_id '] = $this->Auth->User('id'),
                  ),
            );

            if ($this->Mod->save($data)) {

                $this->Session->setFlash(__('La modificacion se ha guardado.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('No se ha podido guardar la modificacion. Intentalo de nuevo.'));
            }
           
            
        } else {
            $options = array('conditions' => array('Mod.' . $this->Mod->primaryKey => $id));
            $this->request->data = $this->Mod->find('first', $options);
        }
        $entradas = $this->Mod->Entrada->find('list');
        $users = $this->Mod->User->find('list');
        $valUsers = $this->Mod->ValUser->find('list');
        $this->set(compact('entradas', 'users', 'valUsers'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Mod->id = $id;
        if (!$this->Mod->exists()) {
            throw new NotFoundException(__('Modificacion no valida'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Mod->delete()) {
            $this->Session->setFlash(__('La modificacion ha sido eliminada'));
        } else {
            $this->Session->setFlash(__('La modificacion no se pudo eliminar. Intentalo de nuevo'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index', 'view');
    }

}