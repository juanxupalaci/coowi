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
        'idetiquetaitem' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'idetiqueta' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'iditem' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_identifica' => ['type' => 'index', 'columns' => ['iditem'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['idetiquetaitem'], 'length' => []],
            'ak_uniqueideitquetaiditem' => ['type' => 'unique', 'columns' => ['idetiqueta', 'iditem'], 'length' => []],
            'fk_identifica2' => ['type' => 'foreign', 'columns' => ['idetiqueta'], 'references' => ['etiquetas', 'idetiqueta'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'fk_identifica' => ['type' => 'foreign', 'columns' => ['iditem'], 'references' => ['items', 'iditem'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
            'idetiquetaitem' => 1,
            'idetiqueta' => 1,
            'iditem' => 1
        ],
    ];
}
