<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LogTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LogTypesTable Test Case
 */
class LogTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LogTypesTable
     */
    public $LogTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.log_types'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('LogTypes') ? [] : ['className' => 'App\Model\Table\LogTypesTable'];
        $this->LogTypes = TableRegistry::get('LogTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LogTypes);

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
