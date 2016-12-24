<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Itemstock Model
 *
 * @method \App\Model\Entity\Itemstock get($primaryKey, $options = [])
 * @method \App\Model\Entity\Itemstock newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Itemstock[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Itemstock|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Itemstock patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Itemstock[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Itemstock findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ItemstockTable extends Table
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

        $this->table('itemstock');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('itemheadid', 'create')
            ->notEmpty('itemheadid');

        $validator
            ->date('expendituredate')
            ->requirePresence('expendituredate', 'create')
            ->notEmpty('expendituredate');

        $validator
            ->integer('quantity')
            ->requirePresence('quantity', 'create')
            ->notEmpty('quantity');

        $validator
            ->requirePresence('remark', 'create')
            ->notEmpty('remark');

        return $validator;
    }
}
