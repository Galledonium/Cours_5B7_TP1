<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paiement $paiement
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Paiement'), ['action' => 'edit', $paiement->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Paiement'), ['action' => 'delete', $paiement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paiement->id)]) ?> </li>
        <li><?= $this->Html->link(__('msgAfficherPaiements'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paiement'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('msgTitre'), ['controller' => 'Applications', 'action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="paiements view large-9 medium-8 columns content">
    <h3><?= h($paiement->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Application') ?></th>
            <td><?= $paiement->has('application') ? $this->Html->link($paiement->application->name, ['controller' => 'Applications', 'action' => 'view', $paiement->application->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Types Paiement') ?></th>
            <td><?= $paiement->has('types_paiement') ? $this->Html->link($paiement->types_paiement->id, ['controller' => 'TypesPaiements', 'action' => 'view', $paiement->types_paiement->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero Carte') ?></th>
            <td><?= h($paiement->numero_carte) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($paiement->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Id') ?></th>
            <td><?= $this->Number->format($paiement->user_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($paiement->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($paiement->modified) ?></td>
        </tr>
    </table>
</div>
