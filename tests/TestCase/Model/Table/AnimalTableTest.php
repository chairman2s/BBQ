<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AnimalTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AnimalTable Test Case
 */
class AnimalTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AnimalTable
     */
    public $Animal;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.animal',
        'app.cut'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Animal') ? [] : ['className' => 'App\Model\Table\AnimalTable'];
        $this->Animal = TableRegistry::get('Animal', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Animal);

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
