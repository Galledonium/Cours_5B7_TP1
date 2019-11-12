<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EvaluationsPaiements Model
 *
 * @property \App\Model\Table\PaiementsTable&\Cake\ORM\Association\BelongsTo $Paiements
 * @property \App\Model\Table\EvaluationsTable&\Cake\ORM\Association\BelongsTo $Evaluations
 *
 * @method \App\Model\Entity\EvaluationsPaiement get($primaryKey, $options = [])
 * @method \App\Model\Entity\EvaluationsPaiement newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EvaluationsPaiement[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EvaluationsPaiement|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EvaluationsPaiement saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EvaluationsPaiement patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EvaluationsPaiement[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EvaluationsPaiement findOrCreate($search, callable $callback = null, $options = [])
 */
class EvaluationsPaiementsTable extends Table
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

        $this->setTable('evaluations_paiements');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Paiements', [
            'foreignKey' => 'paiement_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Evaluations', [
            'foreignKey' => 'evaluation_id',
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

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
        $rules->add($rules->existsIn(['paiement_id'], 'Paiements'));
        $rules->add($rules->existsIn(['evaluation_id'], 'Evaluations'));

        return $rules;
    }
}
