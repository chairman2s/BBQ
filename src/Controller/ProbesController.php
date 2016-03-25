<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Probes Controller
 *
 * @property \App\Model\Table\ProbesTable $Probes
 */
class ProbesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $probes = $this->paginate($this->Probes);

        $this->set(compact('probes'));
        $this->set('_serialize', ['probes']);
    }

    /**
     * View method
     *
     * @param string|null $id Probe id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $probe = $this->Probes->get($id, [
            'contain' => []
        ]);

        $this->set('probe', $probe);
        $this->set('_serialize', ['probe']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $probe = $this->Probes->newEntity();
        if ($this->request->is('post')) {
            $probe = $this->Probes->patchEntity($probe, $this->request->data);
            if ($this->Probes->save($probe)) {
                $this->Flash->success(__('The probe has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The probe could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('probe'));
        $this->set('_serialize', ['probe']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Probe id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $probe = $this->Probes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $probe = $this->Probes->patchEntity($probe, $this->request->data);
            if ($this->Probes->save($probe)) {
                $this->Flash->success(__('The probe has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The probe could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('probe'));
        $this->set('_serialize', ['probe']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Probe id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $probe = $this->Probes->get($id);
        if ($this->Probes->delete($probe)) {
            $this->Flash->success(__('The probe has been deleted.'));
        } else {
            $this->Flash->error(__('The probe could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
