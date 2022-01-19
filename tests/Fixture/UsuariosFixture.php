<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsuariosFixture
 */
class UsuariosFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'nome' => 'Lorem ipsum dolor sit amet',
                'endereco' => 'Lorem ipsum dolor sit amet',
                'documento' => 1,
                'senha' => 'Lorem ipsum dolor ',
                'email' => 'Lorem ipsum dolor sit amet',
                'tipo_usuario_id' => 1,
                'created' => '2022-01-18 23:43:21',
                'modified' => '2022-01-18 23:43:21',
            ],
        ];
        parent::init();
    }
}
