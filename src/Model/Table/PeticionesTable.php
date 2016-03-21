<?php
namespace App\Model\Table;

use App\Model\Entity\Peticione;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Peticiones Model
 *
 */
class PeticionesTable extends Table
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

        $this->table('peticiones');
        $this->displayField('idpeticion');
        $this->primaryKey('idpeticion');
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
            ->integer('idpeticion')
            ->allowEmpty('idpeticion', 'create');

        $validator
            ->requirePresence('nif', 'create')
            ->notEmpty('nif');

        $validator
            ->requirePresence('titulo', 'create')
            ->notEmpty('titulo');

        $validator
            ->requirePresence('descripcion', 'create')
            ->notEmpty('descripcion');

        $validator
            ->requirePresence('estado', 'create')
            ->notEmpty('estado');

        $validator
            ->date('fechacreacion')
            ->requirePresence('fechacreacion', 'create')
            ->notEmpty('fechacreacion');

        $validator
            ->date('fechacaducidad')
            ->requirePresence('fechacaducidad', 'create')
            ->notEmpty('fechacaducidad');

        $validator
            ->requirePresence('localidad', 'create')
            ->notEmpty('localidad');

        $validator
            ->decimal('presupuesto')
            ->allowEmpty('presupuesto');

        $validator
            ->allowEmpty('foto');

        return $validator;
    }
}
