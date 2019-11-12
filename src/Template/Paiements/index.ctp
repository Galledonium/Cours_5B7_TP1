<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paiement[]|\Cake\Collection\CollectionInterface $paiements
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Paiement'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Applications'), ['controller' => 'Applications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Application'), ['controller' => 'Applications', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Types Paiements'), ['controller' => 'TypesPaiements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Types Paiement'), ['controller' => 'TypesPaiements', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="paiements index large-9 medium-8 columns content">
    <h3><?= __('Paiements') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('No. Facture') ?></th>
                <th scope="col"><?= $this->Paginator->sort('application_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type_paiement_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Acheté le') ?></th>
                <th scope="col" class="actions"><?= __('msgActions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($paiements as $paiement): ?>
            <tr>
                <td><?= $this->Number->format($paiement->id) ?></td>
                <td><?= $paiement->has('application') ? $this->Html->link($paiement->application->name, ['controller' => 'Applications', 'action' => 'view', $paiement->application->id]) : '' ?></td>
                <!-- <td><?= $paiement->has('types_paiement') ? $this->Html->link($paiement->types_paiement->typePaiement, ['controller' => 'TypesPaiements', 'action' => 'view', $paiement->types_paiement->id]) : '' ?></td> -->
                <td><?= h($paiement->types_paiement->typePaiement) ?></td>
                <td><?= h($paiement->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $paiement->id]) ?>
                    <?php

                        $user = $this->request->getSession()->read('Auth.User');

                        if($user['permissions'] === 2){

                            $this->Form->postLink(__('Delete'), ['action' => 'delete', $paiement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paiement->id)]);

                        }
                      ?>
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
