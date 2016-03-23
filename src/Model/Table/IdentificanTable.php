<?php
namespace App\Model\Table;

use App\Model\Entity\Identifican;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Identifican Model
 *
 */
class IdentificanTable extends Table
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

        $this->table('identifican');
        $this->displayField('idetiquetaitem');
        $this->primaryKey('idetiquetaitem');
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
            ->integer('idetiquetaitem')
            ->allowEmpty('idetiquetaitem', 'create');

        $validator
            ->integer('idetiqueta')
            ->requirePresence('idetiqueta', 'create')
            ->notEmpty('idetiqueta');

        $validator
            ->integer('iditem')
            ->requirePresence('iditem', 'create')
            ->notEmpty('iditem');

        return $validator;
    }
}
