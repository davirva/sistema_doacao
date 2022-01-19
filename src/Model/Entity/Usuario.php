<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuario Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $endereco
 * @property int $documento
 * @property string $senha
 * @property string $email
 * @property int $tipo_usuario_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\TipoUsuario $tipo_usuario
 * @property \App\Model\Entity\Produto[] $produtos
 */
class Usuario extends Entity
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
        'nome' => true,
        'endereco' => true,
        'documento' => true,
        'senha' => true,
        'email' => true,
        'tipo_usuario_id' => true,
        'created' => true,
        'modified' => true,
        'tipo_usuario' => true,
        'produtos' => true,
    ];
}
