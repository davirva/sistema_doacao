<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DonationsFixture
 */
class DonationsFixture extends TestFixture
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
                'produto_id' => 1,
                'usuario_padaria_id' => 1,
                'usuario_familia_id' => 1,
                'usuario_instituicao_id' => 1,
                'quantidade' => 1,
                'data_doacao' => '2022-01-18',
            ],
        ];
        parent::init();
    }
}
