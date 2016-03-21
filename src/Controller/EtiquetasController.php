<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Etiquetas Controller
 *
 * @property \App\Model\Table\EtiquetasTable $Etiquetas
 */
class EtiquetasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $etiquetas = $this->paginate($this->Etiquetas);

        $this->set(compact('etiquetas'));
        $this->set('_serialize', ['etiquetas']);
    }

    /**
     * View method
     *
     * @param string|null $id Etiqueta id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $etiqueta = $this->Etiquetas->get($id, [
            'contain' => []
        ]);

        $this->set('etiqueta', $etiqueta);
        $this->set('_serialize', ['etiqueta']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $etiqueta = $this->Etiquetas->newEntity();
        if ($this->request->is('post')) {
            $etiqueta = $this->Etiquetas->patchEntity($etiqueta, $this->request->data);
            if ($this->Etiquetas->save($etiqueta)) {
                $this->Flash->success(__('The etiqueta has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The etiqueta could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('etiqueta'));
        $this->set('_serialize', ['etiqueta']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Etiqueta id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $etiqueta = $this->Etiquetas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $etiqueta = $this->Etiquetas->patchEntity($etiqueta, $this->request->data);
            if ($this->Etiquetas->save($etiqueta)) {
                $this->Flash->success(__('The etiqueta has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The etiqueta could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('etiqueta'));
        $this->set('_serialize', ['etiqueta']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Etiqueta id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $etiqueta = $this->Etiquetas->get($id);
        if ($this->Etiquetas->delete($etiqueta)) {
            $this->Flash->success(__('The etiqueta has been deleted.'));
        } else {
            $this->Flash->error(__('The etiqueta could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
