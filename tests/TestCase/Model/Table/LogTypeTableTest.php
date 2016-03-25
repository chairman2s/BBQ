<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LogTypeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LogTypeTable Test Case
 */
class LogTypeTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LogTypeTable
     */
    public $LogType;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.log_type'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('LogType') ? [] : ['className' => 'App\Model\Table\LogTypeTable'];
        $this->LogType = TableRegistry::get('LogType', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LogType);

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
