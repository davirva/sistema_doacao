<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TipoUsuario[]|\Cake\Collection\CollectionInterface $tipoUsuarios
 */
?>
<div class="tipoUsuarios index content">
    <?= $this->Html->link(__('Adicionar Tipo Usuario'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tipo Usuarios') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tipoUsuarios as $tipoUsuario): ?>
                <tr>
                    <td><?= $this->Number->format($tipoUsuario->id) ?></td>
                    <td><?= h($tipoUsuario->nome) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $tipoUsuario->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $tipoUsuario->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $tipoUsuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoUsuario->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
