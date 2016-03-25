<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProbesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProbesTable Test Case
 */
class ProbesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProbesTable
     */
    public $Probes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.probes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Probes') ? [] : ['className' => 'App\Model\Table\ProbesTable'];
        $this->Probes = TableRegistry::get('Probes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Probes);

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
