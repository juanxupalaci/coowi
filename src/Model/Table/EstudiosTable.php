<?php
namespace App\Model\Table;

use App\Model\Entity\Estudio;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Estudios Model
 *
 */
class EstudiosTable extends Table
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

        $this->table('estudios');
        $this->displayField('idestudio');
        $this->primaryKey('idestudio');
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
            ->integer('idestudio')
            ->allowEmpty('idestudio', 'create');

        $validator
            ->requirePresence('idusuario', 'create')
            ->notEmpty('idusuario');
            //->requirePresence('nif', 'create')
            //->notEmpty('nif');

        $validator
            ->requirePresence('centro', 'create')
            ->notEmpty('centro');

        $validator
            ->requirePresence('titulacion', 'create')
            ->notEmpty('titulacion');

        $validator
            ->date('fechainicio')
            ->requirePresence('fechainicio', 'create')
            ->notEmpty('fechainicio');

        $validator
            ->date('fechafin')
            ->allowEmpty('fechafin');

        return $validator;
    }
}
