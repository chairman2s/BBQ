<?php
namespace App\Model\Table;

use App\Model\Entity\ProbeLog;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProbeLogs Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Probes
 * @property \Cake\ORM\Association\BelongsTo $Events
 */
class ProbeLogsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('probe_logs');
        $this->displayField('Id');
        $this->primaryKey('Id');

        $this->belongsTo('Probes', [
            'foreignKey' => 'Probes_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Events', [
            'foreignKey' => 'Events_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('Id')
            ->allowEmpty('Id', 'create');

        $validator
            ->integer('Value')
            ->allowEmpty('Value');

        $validator
            ->dateTime('Timestamp')
            ->allowEmpty('Timestamp');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['Probes_id'], 'Probes'));
        $rules->add($rules->existsIn(['Events_id'], 'Events'));
        return $rules;
    }
}
