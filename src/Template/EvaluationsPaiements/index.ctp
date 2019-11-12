<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EvaluationsPaiement[]|\Cake\Collection\CollectionInterface $evaluationsPaiements
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Evaluations Paiement'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Paiements'), ['controller' => 'Paiements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paiement'), ['controller' => 'Paiements', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Evaluations'), ['controller' => 'Evaluations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evaluation'), ['controller' => 'Evaluations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="evaluationsPaiements index large-9 medium-8 columns content">
    <h3><?= __('Evaluations Paiements') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('paiement_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('evaluation_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($evaluationsPaiements as $evaluationsPaiement): ?>
            <tr>
                <td><?= $this->Number->format($evaluationsPaiement->id) ?></td>
                <td><?= $evaluationsPaiement->has('paiement') ? $this->Html->link($evaluationsPaiement->paiement->id, ['controller' => 'Paiements', 'action' => 'view', $evaluationsPaiement->paiement->id]) : '' ?></td>
                <td><?= $evaluationsPaiement->has('evaluation') ? $this->Html->link($evaluationsPaiement->evaluation->id, ['controller' => 'Evaluations', 'action' => 'view', $evaluationsPaiement->evaluation->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $evaluationsPaiement->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $evaluationsPaiement->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $evaluationsPaiement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evaluationsPaiement->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
