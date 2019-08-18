<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Products Model
 *
 * @method \App\Model\Entity\Product get($primaryKey, $options = [])
 * @method \App\Model\Entity\Product newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Product[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Product|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Product[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Product findOrCreate($search, callable $callback = null, $options = [])
 */
class ProductsTable extends Table
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

        $this->setTable('products');
        $this->setDisplayField('name');
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('price')
            ->maxLength('price', 255)
            ->requirePresence('price', 'create')
            ->notEmptyString('price');

        $validator
            ->scalar('dt_valid')
            ->maxLength('dt_valid', 255)
            ->allowEmptyString('dt_valid');

        $validator
            ->scalar('dt_frab')
            ->maxLength('dt_frab', 255)
            ->requirePresence('dt_frab', 'create')
            ->notEmptyString('dt_frab');

        $validator
            ->scalar('quantidade')
            ->maxLength('quantidade', 255)
            ->allowEmptyString('quantidade');

        $validator
            ->scalar('unidade_medida')
            ->maxLength('unidade_medida', 255)
            ->requirePresence('unidade_medida', 'create')
            ->notEmptyString('unidade_medida');

        $validator
            ->scalar('peresivel')
            ->maxLength('peresivel', 255)
            ->requirePresence('peresivel', 'create')
            ->notEmptyString('peresivel');

        $validator
            ->scalar('unidade_monetaria')
            ->maxLength('unidade_monetaria', 255)
            ->requirePresence('unidade_monetaria', 'create')
            ->notEmptyString('unidade_monetaria');

        return $validator;
    }
}
