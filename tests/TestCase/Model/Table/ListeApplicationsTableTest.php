<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ListeApplicationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ListeApplicationsTable Test Case
 */
class ListeApplicationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ListeApplicationsTable
     */
    public $ListeApplications;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ListeApplications'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ListeApplications') ? [] : ['className' => ListeApplicationsTable::class];
        $this->ListeApplications = TableRegistry::getTableLocator()->get('ListeApplications', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ListeApplications);

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
