<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Peticiones Controller
 *
 * @property \App\Model\Table\PeticionesTable $Peticiones
 */
class PeticionesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $peticiones = $this->paginate($this->Peticiones);

        $this->set(compact('peticiones'));
        $this->set('_serialize', ['peticiones']);
    }

    /**
     * View method
     *
     * @param string|null $id Peticione id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $peticione = $this->Peticiones->get($id, [
            'contain' => []
        ]);
		

        $this->set('peticione', $peticione);
        $this->set('_serialize', ['peticione']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $peticione = $this->Peticiones->newEntity();
        if ($this->request->is('post')) {
            $peticione = $this->Peticiones->patchEntity($peticione, $this->request->data);
            if ($this->Peticiones->save($peticione)) {
                $this->Flash->success(__('The peticione has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The peticione could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('peticione'));
        $this->set('_serialize', ['peticione']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Peticione id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $peticione = $this->Peticiones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $peticione = $this->Peticiones->patchEntity($peticione, $this->request->data);
            if ($this->Peticiones->save($peticione)) {
                $this->Flash->success(__('The peticione has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The peticione could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('peticione'));
        $this->set('_serialize', ['peticione']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Peticione id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $peticione = $this->Peticiones->get($id);
        if ($this->Peticiones->delete($peticione)) {
            $this->Flash->success(__('The peticione has been deleted.'));
        } else {
            $this->Flash->error(__('The peticione could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
