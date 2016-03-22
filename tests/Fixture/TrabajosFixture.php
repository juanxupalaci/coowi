<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TrabajosFixture
 *
 */
class TrabajosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'idtrabajo' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nif' => ['type' => 'string', 'length' => 9, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'empresa' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'fechainicio' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'fechafin' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'puesto' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_trabaja' => ['type' => 'index', 'columns' => ['nif'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idtrabajo'], 'length' => []],
            'fk_trabaja' => ['type' => 'foreign', 'columns' => ['nif'], 'references' => ['usuarios', 'nif'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
            'idtrabajo' => 1,
            'nif' => 'Lorem i',
            'empresa' => 'Lorem ipsum dolor sit amet',
            'fechainicio' => '2016-03-22',
            'fechafin' => '2016-03-22',
            'puesto' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
