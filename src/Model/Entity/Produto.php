<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Produto Entity
 *
 * @property int $id
 * @property int $usuario_id
 * @property string $nome
 * @property string|null $descricao
 * @property int|null $quantidade
 * @property \Cake\I18n\FrozenDate $validade
 *
 * @property \App\Model\Entity\Usuario $usuario
 * @property \App\Model\Entity\Donation[] $donations
 */
class Produto extends Entity
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
        'usuario_id' => true,
        'nome' => true,
        'descricao' => true,
        'quantidade' => true,
        'validade' => true,
        'usuario' => true,
        'donations' => true,
    ];
}
