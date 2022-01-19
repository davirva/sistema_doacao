<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Donation $donation
 * @var string[]|\Cake\Collection\CollectionInterface $produtos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $donation->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $donation->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Lista de Donations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="donations form content">
            <?= $this->Form->create($donation) ?>
            <fieldset>
                <legend><?= __('Editar Donation') ?></legend>
                <?php
                    echo $this->Form->control('produto_id', ['options' => $produtos]);
                    echo $this->Form->control('usuario_padaria_id');
                    echo $this->Form->control('usuario_familia_id');
                    echo $this->Form->control('usuario_instituicao_id');
                    echo $this->Form->control('quantidade');
                    echo $this->Form->control('data_doacao');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
