<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto $produto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Editar Produto'), ['action' => 'edit', $produto->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Deletar Produto'), ['action' => 'delete', $produto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Lista de Produtos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Adicionar Produto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="produtos view content">
            <h3><?= h($produto->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Usuario') ?></th>
                    <td><?= $produto->has('usuario') ? $this->Html->link($produto->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $produto->usuario->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($produto->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($produto->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantidade') ?></th>
                    <td><?= $this->Number->format($produto->quantidade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Validade') ?></th>
                    <td><?= h($produto->validade) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Descricao') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($produto->descricao)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Donations') ?></h4>
                <?php if (!empty($produto->donations)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Produto Id') ?></th>
                            <th><?= __('Usuario Padaria Id') ?></th>
                            <th><?= __('Usuario Familia Id') ?></th>
                            <th><?= __('Usuario Instituicao Id') ?></th>
                            <th><?= __('Quantidade') ?></th>
                            <th><?= __('Data Doacao') ?></th>
                            <th class="actions"><?= __('Ações') ?></th>
                        </tr>
                        <?php foreach ($produto->donations as $donations) : ?>
                        <tr>
                            <td><?= h($donations->id) ?></td>
                            <td><?= h($donations->produto_id) ?></td>
                            <td><?= h($donations->usuario_padaria_id) ?></td>
                            <td><?= h($donations->usuario_familia_id) ?></td>
                            <td><?= h($donations->usuario_instituicao_id) ?></td>
                            <td><?= h($donations->quantidade) ?></td>
                            <td><?= h($donations->data_doacao) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('Visualizar'), ['controller' => 'Donations', 'action' => 'view', $donations->id]) ?>
                                <?= $this->Html->link(__('Editar'), ['controller' => 'Donations', 'action' => 'edit', $donations->id]) ?>
                                <?= $this->Form->postLink(__('Deletar'), ['controller' => 'Donations', 'action' => 'delete', $donations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $donations->id)]) ?>
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
