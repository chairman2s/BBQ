<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Animals Controller
 *
 * @property \App\Model\Table\AnimalsTable $Animals
 */
class AnimalsController extends AppController
{
     public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }
    
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $animals = $this->paginate($this->Animals);

        $this->set(compact('animals'));
        $this->set('_serialize', ['animals']);
    }

    /**
     * View method
     *
     * @param string|null $id Animal id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $animal = $this->Animals->get($id, [
            'contain' => []
        ]);

        $this->set('animal', $animal);
        $this->set('_serialize', ['animal']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $animal = $this->Animals->newEntity();
        if ($this->request->is('post')) {
            $animal = $this->Animals->patchEntity($animal, $this->request->data);
            if ($this->Animals->save($animal)) {
                $this->Flash->success(__('The animal has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The animal could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('animal'));
        $this->set('_serialize', ['animal']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Animal id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $animal = $this->Animals->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $animal = $this->Animals->patchEntity($animal, $this->request->data);
            if ($this->Animals->save($animal)) {
                $this->Flash->success(__('The animal has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The animal could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('animal'));
        $this->set('_serialize', ['animal']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Animal id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $animal = $this->Animals->get($id);
        if ($this->Animals->delete($animal)) {
            $this->Flash->success(__('The animal has been deleted.'));
        } else {
            $this->Flash->error(__('The animal could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
