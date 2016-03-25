<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LogTypes Controller
 *
 * @property \App\Model\Table\LogTypesTable $LogTypes
 */
class LogTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $logTypes = $this->paginate($this->LogTypes);

        $this->set(compact('logTypes'));
        $this->set('_serialize', ['logTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Log Type id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $logType = $this->LogTypes->get($id, [
            'contain' => []
        ]);

        $this->set('logType', $logType);
        $this->set('_serialize', ['logType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $logType = $this->LogTypes->newEntity();
        if ($this->request->is('post')) {
            $logType = $this->LogTypes->patchEntity($logType, $this->request->data);
            if ($this->LogTypes->save($logType)) {
                $this->Flash->success(__('The log type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The log type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('logType'));
        $this->set('_serialize', ['logType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Log Type id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $logType = $this->LogTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $logType = $this->LogTypes->patchEntity($logType, $this->request->data);
            if ($this->LogTypes->save($logType)) {
                $this->Flash->success(__('The log type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The log type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('logType'));
        $this->set('_serialize', ['logType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Log Type id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $logType = $this->LogTypes->get($id);
        if ($this->LogTypes->delete($logType)) {
            $this->Flash->success(__('The log type has been deleted.'));
        } else {
            $this->Flash->error(__('The log type could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
