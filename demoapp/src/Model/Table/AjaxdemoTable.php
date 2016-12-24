<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ajaxdemo Model
 *
 * @method \App\Model\Entity\Ajaxdemo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ajaxdemo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ajaxdemo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ajaxdemo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ajaxdemo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ajaxdemo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ajaxdemo findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AjaxdemoTable extends Table
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

        $this->table('ajaxdemo');
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
            ->requirePresence('email id', 'create')
            ->notEmpty('email id');

        $validator
            ->requirePresence('address', 'create')
            ->notEmpty('address');

        return $validator;
    }
}
