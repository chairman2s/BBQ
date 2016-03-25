<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CutsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CutsTable Test Case
 */
class CutsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CutsTable
     */
    public $Cuts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cuts',
        'app.animals'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Cuts') ? [] : ['className' => 'App\Model\Table\CutsTable'];
        $this->Cuts = TableRegistry::get('Cuts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cuts);

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
