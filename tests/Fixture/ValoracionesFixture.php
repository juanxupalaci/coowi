<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ValoracionesFixture
 *
 */
class ValoracionesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idvaloracion' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'idusuario1' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'idusuario2' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'comentario' => ['type' => 'string', 'length' => 256, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'puntuacion' => ['type' => 'decimal', 'length' => 2, 'precision' => 1, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'fecha' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'estado' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => 'activado', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_relationship_10' => ['type' => 'index', 'columns' => ['idusuario2'], 'length' => []],
            'fk_relationship_9' => ['type' => 'index', 'columns' => ['idusuario1'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idvaloracion'], 'length' => []],
            'fk_relationship_9' => ['type' => 'foreign', 'columns' => ['idusuario1'], 'references' => ['usuarios', 'idusuario'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'fk_relationship_10' => ['type' => 'foreign', 'columns' => ['idusuario2'], 'references' => ['usuarios', 'idusuario'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'idvaloracion' => 1,
            'idusuario1' => 1,
            'idusuario2' => 1,
            'comentario' => 'Lorem ipsum dolor sit amet',
            'puntuacion' => 1.5,
            'fecha' => '2016-03-24',
            'estado' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
