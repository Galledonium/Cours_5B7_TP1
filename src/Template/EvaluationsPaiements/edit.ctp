<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EvaluationsPaiement $evaluationsPaiement
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $evaluationsPaiement->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $evaluationsPaiement->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Evaluations Paiements'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Paiements'), ['controller' => 'Paiements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paiement'), ['controller' => 'Paiements', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Evaluations'), ['controller' => 'Evaluations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evaluation'), ['controller' => 'Evaluations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="evaluationsPaiements form large-9 medium-8 columns content">
    <?= $this->Form->create($evaluationsPaiement) ?>
    <fieldset>
        <legend><?= __('Edit Evaluations Paiement') ?></legend>
        <?php
            echo $this->Form->control('paiement_id', ['options' => $paiements]);
            echo $this->Form->control('evaluation_id', ['options' => $evaluations]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
