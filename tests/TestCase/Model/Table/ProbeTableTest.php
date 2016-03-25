<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProbeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProbeTable Test Case
 */
class ProbeTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProbeTable
     */
    public $Probe;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.probe'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Probe') ? [] : ['className' => 'App\Model\Table\ProbeTable'];
        $this->Probe = TableRegistry::get('Probe', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Probe);

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
