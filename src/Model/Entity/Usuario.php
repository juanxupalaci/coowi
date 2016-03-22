<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuario Entity.
 *
 * @property int $idusuario
 * @property int $idtipousuario
 * @property string $nif
 * @property string $nombre
 * @property string $apellidos
 * @property string $email
 * @property string $telefono
 * @property string $localidad
 * @property string $cp
 * @property string $foto
 * @property string $contrasena
 * @property \Cake\I18n\Time $fecha
 * @property string $estado
 */
class Usuario extends Entity
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
        'idusuario' => false,
    ];
}
