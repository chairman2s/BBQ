<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProbeLogsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProbeLogsTable Test Case
 */
class ProbeLogsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProbeLogsTable
     */
    public $ProbeLogs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.probe_logs',
        'app.probes',
        'app.events',
        'app.cuts',
        'app.animals',
        'app.equipment',
        'app.heat_sources',
        'app.users',
        'app.social_accounts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProbeLogs') ? [] : ['className' => 'App\Model\Table\ProbeLogsTable'];
        $this->ProbeLogs = TableRegistry::get('ProbeLogs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProbeLogs);

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
