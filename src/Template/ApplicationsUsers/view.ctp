<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ApplicationsUser $applicationsUser
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Applications User'), ['action' => 'edit', $applicationsUser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Applications User'), ['action' => 'delete', $applicationsUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $applicationsUser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Applications Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Applications User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Applications'), ['controller' => 'Applications', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Application'), ['controller' => 'Applications', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="applicationsUsers view large-9 medium-8 columns content">
    <h3><?= h($applicationsUser->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $applicationsUser->has('user') ? $this->Html->link($applicationsUser->user->id, ['controller' => 'Users', 'action' => 'view', $applicationsUser->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Application') ?></th>
            <td><?= $applicationsUser->has('application') ? $this->Html->link($applicationsUser->application->name, ['controller' => 'Applications', 'action' => 'view', $applicationsUser->application->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($applicationsUser->id) ?></td>
        </tr>
    </table>
</div>
