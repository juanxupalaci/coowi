<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Trabajo Entity.
 *
 * @property int $idtrabajo
 * @property string $nif
 * @property string $empresa
 * @property \Cake\I18n\Time $fechainicio
 * @property \Cake\I18n\Time $fechafin
 * @property string $puesto
 */
class Trabajo extends Entity
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
        'idtrabajo' => false,
    ];
}
