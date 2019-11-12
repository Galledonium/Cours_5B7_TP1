<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TypesPaiement $typesPaiement
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $typesPaiement->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $typesPaiement->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Types Paiements'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="typesPaiements form large-9 medium-8 columns content">
    <?= $this->Form->create($typesPaiement) ?>
    <fieldset>
        <legend><?= __('Edit Types Paiement') ?></legend>
        <?php
            echo $this->Form->control('typePaiement');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
