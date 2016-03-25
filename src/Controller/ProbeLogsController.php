<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProbeLogs Controller
 *
 * @property \App\Model\Table\ProbeLogsTable $ProbeLogs
 */
class ProbeLogsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Probes', 'Events']
        ];
        $probeLogs = $this->paginate($this->ProbeLogs);

        $this->set(compact('probeLogs'));
        $this->set('_serialize', ['probeLogs']);
    }

    /**
     * View method
     *
     * @param string|null $id Probe Log id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $probeLog = $this->ProbeLogs->get($id, [
            'contain' => ['Probes', 'Events']
        ]);

        $this->set('probeLog', $probeLog);
        $this->set('_serialize', ['probeLog']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $probeLog = $this->ProbeLogs->newEntity();
        if ($this->request->is('post')) {
            $probeLog = $this->ProbeLogs->patchEntity($probeLog, $this->request->data);
            if ($this->ProbeLogs->save($probeLog)) {
                $this->Flash->success(__('The probe log has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The probe log could not be saved. Please, try again.'));
            }
        }
        $probes = $this->ProbeLogs->Probes->find('list', ['limit' => 200]);
        $events = $this->ProbeLogs->Events->find('list', ['limit' => 200]);
        $this->set(compact('probeLog', 'probes', 'events'));
        $this->set('_serialize', ['probeLog']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Probe Log id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $probeLog = $this->ProbeLogs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $probeLog = $this->ProbeLogs->patchEntity($probeLog, $this->request->data);
            if ($this->ProbeLogs->save($probeLog)) {
                $this->Flash->success(__('The probe log has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The probe log could not be saved. Please, try again.'));
            }
        }
        $probes = $this->ProbeLogs->Probes->find('list', ['limit' => 200]);
        $events = $this->ProbeLogs->Events->find('list', ['limit' => 200]);
        $this->set(compact('probeLog', 'probes', 'events'));
        $this->set('_serialize', ['probeLog']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Probe Log id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $probeLog = $this->ProbeLogs->get($id);
        if ($this->ProbeLogs->delete($probeLog)) {
            $this->Flash->success(__('The probe log has been deleted.'));
        } else {
            $this->Flash->error(__('The probe log could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
