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
        $this->displayField('iditem');
        $this->primaryKey(['iditem', 'idetiqueta']);
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
            ->integer('iditem')
            ->allowEmpty('iditem', 'create');

        $validator
            ->integer('idetiqueta')
            ->allowEmpty('idetiqueta', 'create');

        return $validator;
    }
}
