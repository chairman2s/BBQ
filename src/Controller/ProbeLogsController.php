<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;
use Cake\Database\Type;
use Cake\I18n\Time;


/**
 * ProbeLogs Controller
 *
 * @property \App\Model\Table\ProbeLogsTable $ProbeLogs
 */
class ProbeLogsController extends AppController
{
   public $helpers = [
        'ChartJs.Chartjs' => [
            'Chart' => [
                'type' => 'line',
            ],
            'Canvas' => [
                'position' => 'relative',
                'width' => 100,
                'height' => 20,
                'wrapper' => false,
                //'css' => ['padding' => '10px'],
            ],
            'Options' => [
                'responsive' => true,
                'pointdot' => false,
                'line' => [
                    'scaleShowGridLines' => false 
                ]
            ],
        ]
    ];
    public function import()
    {
        $probeLog = $this->ProbeLogs->newEntity();
        if ($this->request->is('post')) {
            
        $Event_id = $this->request->data['Events_id'];
         $numsuccess = 0;   
            
            //$probeLog = $this->ProbeLogs->patchEntity($probeLog, $this->request->data);
            //debug($probeLog);
            $row = 1;
            if (($handle = fopen($this->request->data['CSVFile']['tmp_name'], "r")) !== FALSE) {
                $data2 = fgetcsv($handle,100,",");
                $data2 = fgetcsv($handle,100,",");
                $probes = TableRegistry::get('Probes');            
            }
            
            if (($handle = fopen($this->request->data['CSVFile']['tmp_name'], "r")) !== FALSE) {
             
                $result = $probes->findByName($data2[0])->first();
                $Probes_id = $result['Id'];
             
                $flag = true;
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                  if($flag) { $flag = false; continue; }
                    $num = count($data);
                    $subdata[$row]['Probes_id'] = $Probes_id;
                    $subdata[$row]['Events_id'] = $Event_id;
                
                    $subdata[$row]['Timestamp'] = new Time(date('Y-m-d H:i:s',strtotime(trim($data[1]))), 'Europe/Oslo');
                    $subdata[$row]['Created'] = Time::now();
                    $subdata[$row]['Modified'] = Time::now();
                    $subdata[$row]['Value'] = $data[2];
                    $row++;
                    
                 }
                fclose($handle);
                $entities = $this->ProbeLogs->newEntities($subdata);
                foreach ($entities as $entity) {
                //debug($entity);
                //$this->ProbeLogs->save($entity);
                    if ($this->ProbeLogs->save($entity)) {
                    
                     $numsuccess++;
                    } else {
                        $this->Flash->error(__('The probe log could not be saved. Please, try again.'));
                    }
                 }
                  $this->Flash->success(__($numsuccess .'number of rows has been added to the log.'));
            }
                
     
          
            
            
        }
        $probes = $this->ProbeLogs->Probes->find('list', ['limit' => 200]);
        $events = $this->ProbeLogs->Events->find('list', ['limit' => 200]);
        $this->set(compact('probeLog', 'probes', 'events'));
        $this->set('_serialize', ['probeLog']);
    
        
    }
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

    public function viewgraph()
            
    {
        $probeLogs = $this->ProbeLogs->find('all')->order(['Timestamp' => 'ASC']);
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
            debug($this->request->data);
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
