<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Donation $donation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Editar Donation'), ['action' => 'edit', $donation->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Deletar Donation'), ['action' => 'delete', $donation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $donation->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Donations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Adicionar Donation'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="donations view content">
            <h3><?= h($donation->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Produto') ?></th>
                    <td><?= $donation->has('produto') ? $this->Html->link($donation->produto->id, ['controller' => 'Produtos', 'action' => 'view', $donation->produto->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($donation->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Usuario Padaria Id') ?></th>
                    <td><?= $this->Number->format($donation->usuario_padaria_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Usuario Familia Id') ?></th>
                    <td><?= $this->Number->format($donation->usuario_familia_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Usuario Instituicao Id') ?></th>
                    <td><?= $this->Number->format($donation->usuario_instituicao_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantidade') ?></th>
                    <td><?= $this->Number->format($donation->quantidade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Doacao') ?></th>
                    <td><?= h($donation->data_doacao) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
