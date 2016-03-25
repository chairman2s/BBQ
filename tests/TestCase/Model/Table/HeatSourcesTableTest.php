<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HeatSourcesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HeatSourcesTable Test Case
 */
class HeatSourcesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HeatSourcesTable
     */
    public $HeatSources;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('HeatSources') ? [] : ['className' => 'App\Model\Table\HeatSourcesTable'];
        $this->HeatSources = TableRegistry::get('HeatSources', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->HeatSources);

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
