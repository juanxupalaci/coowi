<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tiposusuarios Controller
 *
 * @property \App\Model\Table\TiposusuariosTable $Tiposusuarios
 */
class TiposusuariosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tiposUsuarios = $this->paginate($this->Tiposusuarios);

        $this->set(compact('tiposUsuarios'));
        $this->set('_serialize', ['tiposUsuarios']);
    }

    /**
     * View method
     *
     * @param string|null $id Tipos Usuario id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tiposUsuario = $this->Tiposusuarios->get($id, [
            'contain' => []
        ]);

        $this->set('tiposUsuario', $tiposUsuario);
        $this->set('_serialize', ['tiposUsuario']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tiposUsuario = $this->Tiposusuarios->newEntity();
        if ($this->request->is('post')) {
            $tiposUsuario = $this->Tiposusuarios->patchEntity($tiposUsuario, $this->request->data);
            if ($this->Tiposusuarios->save($tiposUsuario)) {
                $this->Flash->success(__('The tipos usuario has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tipos usuario could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tiposUsuario'));
        $this->set('_serialize', ['tiposUsuario']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipos Usuario id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tiposUsuario = $this->Tiposusuarios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tiposUsuario = $this->Tiposusuarios->patchEntity($tiposUsuario, $this->request->data);
            if ($this->Tiposusuarios->save($tiposUsuario)) {
                $this->Flash->success(__('The tipos usuario has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tipos usuario could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tiposUsuario'));
        $this->set('_serialize', ['tiposUsuario']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipos Usuario id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tiposUsuario = $this->Tiposusuarios->get($id);
        if ($this->Tiposusuarios->delete($tiposUsuario)) {
            $this->Flash->success(__('The tipos usuario has been deleted.'));
        } else {
            $this->Flash->error(__('The tipos usuario could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
