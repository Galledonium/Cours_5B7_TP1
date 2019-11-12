<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TypesPaiement $typesPaiement
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Types Paiement'), ['action' => 'edit', $typesPaiement->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Types Paiement'), ['action' => 'delete', $typesPaiement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typesPaiement->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Types Paiements'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Types Paiement'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="typesPaiements view large-9 medium-8 columns content">
    <h3><?= h($typesPaiement->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('TypePaiement') ?></th>
            <td><?= h($typesPaiement->typePaiement) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($typesPaiement->id) ?></td>
        </tr>
    </table>
</div>
