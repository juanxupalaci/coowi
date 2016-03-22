<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TrabajosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TrabajosTable Test Case
 */
class TrabajosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TrabajosTable
     */
    public $Trabajos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.trabajos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Trabajos') ? [] : ['className' => 'App\Model\Table\TrabajosTable'];
        $this->Trabajos = TableRegistry::get('Trabajos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Trabajos);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
