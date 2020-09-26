<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Routers Model
 *
 * @method \App\Model\Entity\Router newEmptyEntity()
 * @method \App\Model\Entity\Router newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Router[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Router get($primaryKey, $options = [])
 * @method \App\Model\Entity\Router findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Router patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Router[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Router|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Router saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Router[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Router[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Router[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Router[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RoutersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('routers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('sapid')
            ->maxLength('sapid', 255)
            ->requirePresence('sapid', 'create')
            ->notEmptyString('sapid');

        $validator
            ->scalar('hostname')
            ->maxLength('hostname', 255)
            ->requirePresence('hostname', 'create')
            ->notEmptyString('hostname');

        $validator
            ->scalar('loopback')
            ->maxLength('loopback', 255)
            ->requirePresence('loopback', 'create')
            ->notEmptyString('loopback');

        $validator
            ->scalar('mac_address')
            ->maxLength('mac_address', 255)
            ->requirePresence('mac_address', 'create')
            ->notEmptyString('mac_address');

        return $validator;
    }
}
