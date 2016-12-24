<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RegisterTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RegisterTable Test Case
 */
class RegisterTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RegisterTable
     */
    public $Register;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.register'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Register') ? [] : ['className' => 'App\Model\Table\RegisterTable'];
        $this->Register = TableRegistry::get('Register', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Register);

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
