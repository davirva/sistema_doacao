<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Donation[]|\Cake\Collection\CollectionInterface $donations
 */
?>
<div class="donations index content">
    <?= $this->Html->link(__('Adicionar Donation'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Donations') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('produto_id') ?></th>
                    <th><?= $this->Paginator->sort('usuario_padaria_id') ?></th>
                    <th><?= $this->Paginator->sort('usuario_familia_id') ?></th>
                    <th><?= $this->Paginator->sort('usuario_instituicao_id') ?></th>
                    <th><?= $this->Paginator->sort('quantidade') ?></th>
                    <th><?= $this->Paginator->sort('data_doacao') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($donations as $donation): ?>
                <tr>
                    <td><?= $this->Number->format($donation->id) ?></td>
                    <td><?= $donation->has('produto') ? $this->Html->link($donation->produto->nome, ['controller' => 'Produtos', 'action' => 'view', $donation->produto->id]) : '' ?></td>
                    <td><?= $donation->usuario_padaria->nome ?></td>
                    <td><?= $donation->usuario_familia ? $donation->usuario_familia->nome : '--' ?></td>
                    <td><?=  $donation->usuario_instituicao ? $donation->usuario_instituicao->nome : '--' ?></td>
                    <td><?= $this->Number->format($donation->quantidade) ?></td>
                    <td><?= h($donation->data_doacao) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $donation->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $donation->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $donation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $donation->id)]) ?>
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
