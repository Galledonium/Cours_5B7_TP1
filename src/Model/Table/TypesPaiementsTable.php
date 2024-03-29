<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TypesPaiements Model
 *
 * @method \App\Model\Entity\TypesPaiement get($primaryKey, $options = [])
 * @method \App\Model\Entity\TypesPaiement newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TypesPaiement[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TypesPaiement|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TypesPaiement saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TypesPaiement patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TypesPaiement[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TypesPaiement findOrCreate($search, callable $callback = null, $options = [])
 */
class TypesPaiementsTable extends Table
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

        $this->setTable('types_paiements');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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

        $validator
            ->scalar('typePaiement')
            ->maxLength('typePaiement', 255)
            ->allowEmptyString('typePaiement');

        return $validator;
    }
}
