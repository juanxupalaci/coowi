<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Valoraciones Controller
 *
 * @property \App\Model\Table\ValoracionesTable $Valoraciones
 */
class ValoracionesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $valoraciones = $this->paginate($this->Valoraciones);

        $this->set(compact('valoraciones'));
        $this->set('_serialize', ['valoraciones']);
    }

    /**
     * View method
     *
     * @param string|null $id Valoracione id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $valoracione = $this->Valoraciones->get($id, [
            'contain' => []
        ]);

        $this->set('valoracione', $valoracione);
        $this->set('_serialize', ['valoracione']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $valoracione = $this->Valoraciones->newEntity();
        if ($this->request->is('post')) {
            $valoracione = $this->Valoraciones->patchEntity($valoracione, $this->request->data);
            if ($this->Valoraciones->save($valoracione)) {
                $this->Flash->success(__('The valoracione has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The valoracione could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('valoracione'));
        $this->set('_serialize', ['valoracione']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Valoracione id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $valoracione = $this->Valoraciones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $valoracione = $this->Valoraciones->patchEntity($valoracione, $this->request->data);
            if ($this->Valoraciones->save($valoracione)) {
                $this->Flash->success(__('The valoracione has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The valoracione could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('valoracione'));
        $this->set('_serialize', ['valoracione']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Valoracione id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $valoracione = $this->Valoraciones->get($id);
        if ($this->Valoraciones->delete($valoracione)) {
            $this->Flash->success(__('The valoracione has been deleted.'));
        } else {
            $this->Flash->error(__('The valoracione could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
