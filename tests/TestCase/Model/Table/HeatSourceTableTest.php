<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HeatSourceTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HeatSourceTable Test Case
 */
class HeatSourceTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HeatSourceTable
     */
    public $HeatSource;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.heat_source'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('HeatSource') ? [] : ['className' => 'App\Model\Table\HeatSourceTable'];
        $this->HeatSource = TableRegistry::get('HeatSource', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->HeatSource);

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
