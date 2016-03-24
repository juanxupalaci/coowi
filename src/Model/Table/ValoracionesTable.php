<?php
namespace App\Model\Table;

use App\Model\Entity\Valoracione;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Valoraciones Model
 *
 */
class ValoracionesTable extends Table
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

        $this->table('valoraciones');
        $this->displayField('idvaloracion');
        $this->primaryKey('idvaloracion');
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
            ->integer('idvaloracion')
            ->allowEmpty('idvaloracion', 'create');

        $validator
            ->integer('idusuario1')
            ->allowEmpty('idusuario1');

        $validator
            ->integer('idusuario2')
            ->allowEmpty('idusuario2');

        $validator
            ->allowEmpty('comentario');

        $validator
            ->decimal('puntuacion')
            ->requirePresence('puntuacion', 'create')
            ->notEmpty('puntuacion');

        $validator
            ->date('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmpty('fecha');

        $validator
            ->requirePresence('estado', 'create')
            ->notEmpty('estado');

        return $validator;
    }
}
