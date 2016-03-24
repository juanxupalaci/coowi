<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Valoracione Entity.
 *
 * @property int $idvaloracion
 * @property int $idusuario1
 * @property int $idusuario2
 * @property string $comentario
 * @property float $puntuacion
 * @property \Cake\I18n\Time $fecha
 * @property string $estado
 */
class Valoracione extends Entity
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
        'idvaloracion' => false,
    ];
}
