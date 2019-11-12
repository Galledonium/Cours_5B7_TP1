<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EvaluationsPaiementsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EvaluationsPaiementsTable Test Case
 */
class EvaluationsPaiementsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EvaluationsPaiementsTable
     */
    public $EvaluationsPaiements;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.EvaluationsPaiements',
        'app.Paiements',
        'app.Evaluations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EvaluationsPaiements') ? [] : ['className' => EvaluationsPaiementsTable::class];
        $this->EvaluationsPaiements = TableRegistry::getTableLocator()->get('EvaluationsPaiements', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EvaluationsPaiements);

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
