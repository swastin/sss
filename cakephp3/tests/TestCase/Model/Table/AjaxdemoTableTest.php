<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AjaxdemoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AjaxdemoTable Test Case
 */
class AjaxdemoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AjaxdemoTable
     */
    public $Ajaxdemo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ajaxdemo'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Ajaxdemo') ? [] : ['className' => 'App\Model\Table\AjaxdemoTable'];
        $this->Ajaxdemo = TableRegistry::get('Ajaxdemo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ajaxdemo);

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
