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
        $this->displayField('IDPETICION');
        $this->primaryKey('IDPETICION');
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
            ->integer('IDPETICION')
            ->allowEmpty('IDPETICION', 'create');

        $validator
            ->requirePresence('NIF', 'create')
            ->notEmpty('NIF');

        $validator
            ->requirePresence('TITULO', 'create')
            ->notEmpty('TITULO');

        $validator
            ->requirePresence('DESCRIPCION', 'create')
            ->notEmpty('DESCRIPCION');

        $validator
            ->requirePresence('ESTADO', 'create')
            ->notEmpty('ESTADO');

        $validator
            ->date('FECHACREACION')
            ->requirePresence('FECHACREACION', 'create')
            ->notEmpty('FECHACREACION');

        $validator
            ->date('FECHACADUCIDAD')
            ->requirePresence('FECHACADUCIDAD', 'create')
            ->notEmpty('FECHACADUCIDAD');

        $validator
            ->requirePresence('LOCALIDAD', 'create')
            ->notEmpty('LOCALIDAD');

        $validator
            ->decimal('PRESUPUESTO')
            ->allowEmpty('PRESUPUESTO');

        $validator
            ->allowEmpty('FOTO');

        return $validator;
    }
}
