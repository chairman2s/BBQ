<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EventTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EventTable Test Case
 */
class EventTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EventTable
     */
    public $Event;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.event',
        'app.cuts',
        'app.animals',
        'app.equipment',
        'app.heat_sources'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Event') ? [] : ['className' => 'App\Model\Table\EventTable'];
        $this->Event = TableRegistry::get('Event', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Event);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
