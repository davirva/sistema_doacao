<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TipoUsuario $tipoUsuario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Editar Tipo Usuario'), ['action' => 'edit', $tipoUsuario->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Deletar Tipo Usuario'), ['action' => 'delete', $tipoUsuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoUsuario->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Tipo Usuarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Adicionar Tipo Usuario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipoUsuarios view content">
            <h3><?= h($tipoUsuario->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($tipoUsuario->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($tipoUsuario->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Usuarios') ?></h4>
                <?php if (!empty($tipoUsuario->usuarios)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nome') ?></th>
                            <th><?= __('Endereco') ?></th>
                            <th><?= __('Documento') ?></th>
                            <th><?= __('Senha') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Tipo Usuario Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Ações') ?></th>
                        </tr>
                        <?php foreach ($tipoUsuario->usuarios as $usuarios) : ?>
                        <tr>
                            <td><?= h($usuarios->id) ?></td>
                            <td><?= h($usuarios->nome) ?></td>
                            <td><?= h($usuarios->endereco) ?></td>
                            <td><?= h($usuarios->documento) ?></td>
                            <td><?= h($usuarios->senha) ?></td>
                            <td><?= h($usuarios->email) ?></td>
                            <td><?= h($usuarios->tipo_usuario_id) ?></td>
                            <td><?= h($usuarios->created) ?></td>
                            <td><?= h($usuarios->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Visualizar'), ['controller' => 'Usuarios', 'action' => 'view', $usuarios->id]) ?>
                                <?= $this->Html->link(__('Editar'), ['controller' => 'Usuarios', 'action' => 'edit', $usuarios->id]) ?>
                                <?= $this->Form->postLink(__('Deletar'), ['controller' => 'Usuarios', 'action' => 'delete', $usuarios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuarios->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
