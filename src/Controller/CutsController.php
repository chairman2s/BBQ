<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cuts Controller
 *
 * @property \App\Model\Table\CutsTable $Cuts
 */
class CutsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Animals']
        ];
        $cuts = $this->paginate($this->Cuts);

        $this->set(compact('cuts'));
        $this->set('_serialize', ['cuts']);
    }

    /**
     * View method
     *
     * @param string|null $id Cut id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cut = $this->Cuts->get($id, [
            'contain' => ['Animals']
        ]);

        $this->set('cut', $cut);
        $this->set('_serialize', ['cut']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cut = $this->Cuts->newEntity();
        if ($this->request->is('post')) {
            $cut = $this->Cuts->patchEntity($cut, $this->request->data);
            if ($this->Cuts->save($cut)) {
                $this->Flash->success(__('The cut has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cut could not be saved. Please, try again.'));
            }
        }
        $animals = $this->Cuts->Animals->find('list', ['limit' => 200]);
        $this->set(compact('cut', 'animals'));
        $this->set('_serialize', ['cut']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cut id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cut = $this->Cuts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cut = $this->Cuts->patchEntity($cut, $this->request->data);
            if ($this->Cuts->save($cut)) {
                $this->Flash->success(__('The cut has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cut could not be saved. Please, try again.'));
            }
        }
        $animals = $this->Cuts->Animals->find('list', ['limit' => 200]);
        $this->set(compact('cut', 'animals'));
        $this->set('_serialize', ['cut']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cut id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cut = $this->Cuts->get($id);
        if ($this->Cuts->delete($cut)) {
            $this->Flash->success(__('The cut has been deleted.'));
        } else {
            $this->Flash->error(__('The cut could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
