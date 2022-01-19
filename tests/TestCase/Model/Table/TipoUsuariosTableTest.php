<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipoUsuariosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoUsuariosTable Test Case
 */
class TipoUsuariosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoUsuariosTable
     */
    protected $TipoUsuarios;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.TipoUsuarios',
        'app.Usuarios',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('TipoUsuarios') ? [] : ['className' => TipoUsuariosTable::class];
        $this->TipoUsuarios = $this->getTableLocator()->get('TipoUsuarios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->TipoUsuarios);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TipoUsuariosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
