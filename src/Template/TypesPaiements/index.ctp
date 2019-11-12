<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TypesPaiement[]|\Cake\Collection\CollectionInterface $typesPaiements
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Types Paiement'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="typesPaiements index large-9 medium-8 columns content">
    <h3><?= __('Types Paiements') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('typePaiement') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($typesPaiements as $typesPaiement): ?>
            <tr>
                <td><?= $this->Number->format($typesPaiement->id) ?></td>
                <td><?= h($typesPaiement->typePaiement) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $typesPaiement->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $typesPaiement->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $typesPaiement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typesPaiement->id)]) ?>
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
