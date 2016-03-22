<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Trabajos Controller
 *
 * @property \App\Model\Table\TrabajosTable $Trabajos
 */
class TrabajosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $trabajos = $this->paginate($this->Trabajos);

        $this->set(compact('trabajos'));
        $this->set('_serialize', ['trabajos']);
    }

    /**
     * View method
     *
     * @param string|null $id Trabajo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $trabajo = $this->Trabajos->get($id, [
            'contain' => []
        ]);

        $this->set('trabajo', $trabajo);
        $this->set('_serialize', ['trabajo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $trabajo = $this->Trabajos->newEntity();
        if ($this->request->is('post')) {
            $trabajo = $this->Trabajos->patchEntity($trabajo, $this->request->data);
            if ($this->Trabajos->save($trabajo)) {
                $this->Flash->success(__('The trabajo has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The trabajo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('trabajo'));
        $this->set('_serialize', ['trabajo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Trabajo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $trabajo = $this->Trabajos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trabajo = $this->Trabajos->patchEntity($trabajo, $this->request->data);
            if ($this->Trabajos->save($trabajo)) {
                $this->Flash->success(__('The trabajo has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The trabajo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('trabajo'));
        $this->set('_serialize', ['trabajo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Trabajo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $trabajo = $this->Trabajos->get($id);
        if ($this->Trabajos->delete($trabajo)) {
            $this->Flash->success(__('The trabajo has been deleted.'));
        } else {
            $this->Flash->error(__('The trabajo could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
