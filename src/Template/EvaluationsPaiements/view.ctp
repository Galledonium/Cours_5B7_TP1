<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EvaluationsPaiement $evaluationsPaiement
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Evaluations Paiement'), ['action' => 'edit', $evaluationsPaiement->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Evaluations Paiement'), ['action' => 'delete', $evaluationsPaiement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evaluationsPaiement->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Evaluations Paiements'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evaluations Paiement'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Paiements'), ['controller' => 'Paiements', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paiement'), ['controller' => 'Paiements', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Evaluations'), ['controller' => 'Evaluations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evaluation'), ['controller' => 'Evaluations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="evaluationsPaiements view large-9 medium-8 columns content">
    <h3><?= h($evaluationsPaiement->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Paiement') ?></th>
            <td><?= $evaluationsPaiement->has('paiement') ? $this->Html->link($evaluationsPaiement->paiement->id, ['controller' => 'Paiements', 'action' => 'view', $evaluationsPaiement->paiement->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Evaluation') ?></th>
            <td><?= $evaluationsPaiement->has('evaluation') ? $this->Html->link($evaluationsPaiement->evaluation->id, ['controller' => 'Evaluations', 'action' => 'view', $evaluationsPaiement->evaluation->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($evaluationsPaiement->id) ?></td>
        </tr>
    </table>
</div>
