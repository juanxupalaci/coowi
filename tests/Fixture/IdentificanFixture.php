<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * IdentificanFixture
 *
 */
class IdentificanFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'identifican';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'iditem' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'idetiqueta' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_identifica2' => ['type' => 'index', 'columns' => ['idetiqueta'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['iditem', 'idetiqueta'], 'length' => []],
            'fk_identifica2' => ['type' => 'foreign', 'columns' => ['idetiqueta'], 'references' => ['etiquetas', 'idetiqueta'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_identifica' => ['type' => 'foreign', 'columns' => ['iditem'], 'references' => ['items', 'iditem'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'iditem' => 1,
            'idetiqueta' => 1
        ],
    ];
}
