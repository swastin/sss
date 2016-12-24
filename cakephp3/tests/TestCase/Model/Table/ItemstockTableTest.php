<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ItemstockTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ItemstockTable Test Case
 */
class ItemstockTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ItemstockTable
     */
    public $Itemstock;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.itemstock'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Itemstock') ? [] : ['className' => 'App\Model\Table\ItemstockTable'];
        $this->Itemstock = TableRegistry::get('Itemstock', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Itemstock);

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
