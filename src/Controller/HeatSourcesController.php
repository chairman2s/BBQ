<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HeatSources Controller
 *
 * @property \App\Model\Table\HeatSourcesTable $HeatSources
 */
class HeatSourcesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $heatSources = $this->paginate($this->HeatSources);

        $this->set(compact('heatSources'));
        $this->set('_serialize', ['heatSources']);
    }

    /**
     * View method
     *
     * @param string|null $id Heat Source id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $heatSource = $this->HeatSources->get($id, [
            'contain' => []
        ]);

        $this->set('heatSource', $heatSource);
        $this->set('_serialize', ['heatSource']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $heatSource = $this->HeatSources->newEntity();
        if ($this->request->is('post')) {
            $heatSource = $this->HeatSources->patchEntity($heatSource, $this->request->data);
            if ($this->HeatSources->save($heatSource)) {
                $this->Flash->success(__('The heat source has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The heat source could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('heatSource'));
        $this->set('_serialize', ['heatSource']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Heat Source id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $heatSource = $this->HeatSources->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $heatSource = $this->HeatSources->patchEntity($heatSource, $this->request->data);
            if ($this->HeatSources->save($heatSource)) {
                $this->Flash->success(__('The heat source has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The heat source could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('heatSource'));
        $this->set('_serialize', ['heatSource']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Heat Source id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $heatSource = $this->HeatSources->get($id);
        if ($this->HeatSources->delete($heatSource)) {
            $this->Flash->success(__('The heat source has been deleted.'));
        } else {
            $this->Flash->error(__('The heat source could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
