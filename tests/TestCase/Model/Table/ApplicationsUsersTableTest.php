<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ApplicationsUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ApplicationsUsersTable Test Case
 */
class ApplicationsUsersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ApplicationsUsersTable
     */
    public $ApplicationsUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ApplicationsUsers',
        'app.Users',
        'app.Applications'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ApplicationsUsers') ? [] : ['className' => ApplicationsUsersTable::class];
        $this->ApplicationsUsers = TableRegistry::getTableLocator()->get('ApplicationsUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ApplicationsUsers);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
