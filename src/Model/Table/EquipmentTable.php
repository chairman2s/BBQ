<?php
namespace App\Model\Table;

use App\Model\Entity\Equipment;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Equipment Model
 *
 * @property \Cake\ORM\Association\BelongsTo $HeatSources
 * @property \Cake\ORM\Association\BelongsTo $Users
 */
class EquipmentTable extends Table
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

        $this->table('equipment');
        $this->displayField('Name');
        $this->primaryKey('Id');

        $this->belongsTo('HeatSources', [
            'foreignKey' => 'HeatSource_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
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
            ->allowEmpty('Name');

        $validator
            ->dateTime('Created')
            ->requirePresence('Created', 'create')
            ->notEmpty('Created');

        $validator
            ->dateTime('Modified')
            ->requirePresence('Modified', 'create')
            ->notEmpty('Modified');

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
        $rules->add($rules->existsIn(['HeatSource_id'], 'HeatSources'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        return $rules;
    }
}
