<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypesPaiementsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypesPaiementsTable Test Case
 */
class TypesPaiementsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TypesPaiementsTable
     */
    public $TypesPaiements;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.TypesPaiements'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TypesPaiements') ? [] : ['className' => TypesPaiementsTable::class];
        $this->TypesPaiements = TableRegistry::getTableLocator()->get('TypesPaiements', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TypesPaiements);

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
