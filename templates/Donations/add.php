<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Donation $donation
 * @var \Cake\Collection\CollectionInterface|string[] $produtos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Lista de Donations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="donations form content">
            <?= $this->Form->create($donation) ?>
            <fieldset>
                <legend><?= __('Adicionar Donation') ?></legend>
                <?php
                    echo $this->Form->control('produto_id', ['options' => $produtos]);
                    echo $this->Form->control('usuario_padaria_id');
                    echo $this->Form->control('usuario_familia_id', ['empty' => true]);
                    echo $this->Form->control('usuario_instituicao_id', ['empty' => true]);
                    echo $this->Form->control('quantidade');
                    echo $this->Form->control('data_doacao');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Salvar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
