<?php
namespace App\Model\Table;

use App\Model\Entity\Trabajo;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Trabajos Model
 *
 */
class TrabajosTable extends Table
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

        $this->table('trabajos');
        $this->displayField('idtrabajo');
        $this->primaryKey('idtrabajo');
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
            ->integer('idtrabajo')
            ->allowEmpty('idtrabajo', 'create');

        $validator
            ->requirePresence('nif', 'create')
            ->notEmpty('nif');

        $validator
            ->requirePresence('empresa', 'create')
            ->notEmpty('empresa');

        $validator
            ->date('fechainicio')
            ->requirePresence('fechainicio', 'create')
            ->notEmpty('fechainicio');

        $validator
            ->date('fechafin')
            ->allowEmpty('fechafin');

        $validator
            ->allowEmpty('puesto');

        return $validator;
    }
}
