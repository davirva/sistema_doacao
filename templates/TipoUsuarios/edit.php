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
            <?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $tipoUsuario->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tipoUsuario->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Lista de Tipo Usuarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="tipoUsuarios form content">
            <?= $this->Form->create($tipoUsuario) ?>
            <fieldset>
                <legend><?= __('Editar Tipo Usuario') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Salvar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
