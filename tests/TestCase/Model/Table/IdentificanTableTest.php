<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IdentificanTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IdentificanTable Test Case
 */
class IdentificanTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\IdentificanTable
     */
    public $Identifican;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.identifican'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Identifican') ? [] : ['className' => 'App\Model\Table\IdentificanTable'];
        $this->Identifican = TableRegistry::get('Identifican', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Identifican);

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
