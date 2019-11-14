<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ListeApplication $listeApplication
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Liste Application'), ['action' => 'edit', $listeApplication->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Liste Application'), ['action' => 'delete', $listeApplication->id], ['confirm' => __('Are you sure you want to delete # {0}?', $listeApplication->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Liste Applications'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Liste Application'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="listeApplications view large-9 medium-8 columns content">
    <h3><?= h($listeApplication->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td><?= h($listeApplication->nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($listeApplication->id) ?></td>
        </tr>
    </table>
</div>
