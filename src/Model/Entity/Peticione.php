<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Peticione Entity.
 *
 * @property int $idpeticion
 * @property string $nif
 * @property string $titulo
 * @property string $descripcion
 * @property string $estado
 * @property \Cake\I18n\Time $fechacreacion
 * @property \Cake\I18n\Time $fechacaducidad
 * @property string $localidad
 * @property float $presupuesto
 * @property string $foto
 */
class Peticione extends Entity
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
        'idpeticion' => false,
    ];
}
