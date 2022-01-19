<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Donation Entity
 *
 * @property int $id
 * @property int $produto_id
 * @property int $usuario_padaria_id
 * @property int $usuario_familia_id
 * @property int $usuario_instituicao_id
 * @property int $quantidade
 * @property \Cake\I18n\FrozenDate $data_doacao
 *
 * @property \App\Model\Entity\Produto $produto
 * @property \App\Model\Entity\UsuarioPadaria $usuario_padaria
 * @property \App\Model\Entity\UsuarioFamilia $usuario_familia
 * @property \App\Model\Entity\UsuarioInstituicao $usuario_instituicao
 */
class Donation extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'produto_id' => true,
        'usuario_padaria_id' => true,
        'usuario_familia_id' => true,
        'usuario_instituicao_id' => true,
        'quantidade' => true,
        'data_doacao' => true,
        'produto' => true,
        'usuario_padaria' => true,
        'usuario_familia' => true,
        'usuario_instituicao' => true,
    ];
}
