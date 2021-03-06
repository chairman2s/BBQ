<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Equipment Controller
 *
 * @property \App\Model\Table\EquipmentTable $Equipment
 */
class EquipmentController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['HeatSources']
        ];
        $equipment = $this->paginate($this->Equipment);

        $this->set(compact('equipment'));
        $this->set('_serialize', ['equipment']);
    }

    /**
     * View method
     *
     * @param string|null $id Equipment id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $equipment = $this->Equipment->get($id, [
            'contain' => ['HeatSources']
        ]);

        $this->set('equipment', $equipment);
        $this->set('_serialize', ['equipment']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $equipment = $this->Equipment->newEntity();
        if ($this->request->is('post')) {
            $equipment = $this->Equipment->patchEntity($equipment, $this->request->data);
            $equipment['user_id'] = $this->request->session()->read('Auth.User.id');
      
                    
            if ($this->Equipment->save($equipment)) {
                $this->Flash->success(__('The equipment has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The equipment could not be saved. Please, try again.'));
            }
        }
        $heatSources = $this->Equipment->HeatSources->find('list', ['limit' => 200]);
        $this->set(compact('equipment', 'heatSources'));
        $this->set('_serialize', ['equipment']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Equipment id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $equipment = $this->Equipment->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $equipment = $this->Equipment->patchEntity($equipment, $this->request->data);
            if ($this->Equipment->save($equipment)) {
                $this->Flash->success(__('The equipment has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The equipment could not be saved. Please, try again.'));
            }
        }
        $heatSources = $this->Equipment->HeatSources->find('list', ['limit' => 200]);
        $this->set(compact('equipment', 'heatSources'));
        $this->set('_serialize', ['equipment']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Equipment id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $equipment = $this->Equipment->get($id);
        if ($this->Equipment->delete($equipment)) {
            $this->Flash->success(__('The equipment has been deleted.'));
        } else {
            $this->Flash->error(__('The equipment could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
