<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Estudio Entity.
 *
 * @property int $idestudio
 * @property string $nif
 * @property string $centro
 * @property string $titulacion
 * @property \Cake\I18n\Time $fechainicio
 * @property \Cake\I18n\Time $fechafin
 */
class Estudio extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'idestudio' => false,
    ];
}
