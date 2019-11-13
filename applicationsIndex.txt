<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Application[]|\Cake\Collection\CollectionInterface $applications
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('msgActions') ?></li>

        <?php $user = $this->request->getSession()->read('Auth.User') ?>
        
        <li><?= $this->Html->link(__('msgAfficherPaiements'), ['controller' => 'Paiements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('msgAcheter'), ['controller' => 'Paiements', 'action' => 'add']) ?></li>

        <?php
            if($user['permissions'] === 2){

                echo '<li>' . $this->Html->link(__('New Application'), ['action' => 'add']) . '</li>';
                echo '<li>' . $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) . '</li>';

            }

        ?>
    </ul>
</nav>
<div class="applications index large-9 medium-8 columns content">
    <h3><?= __('msgTitre') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prix') ?></th>
                <th scope="col"><?= $this->Paginator->sort('evaluation') ?></th>
                <th scope="col" class="actions"><?= __('msgActions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($applications as $application): ?>
            <tr>
                <td><?= h($application->name) ?></td>
                <td><?= h($application->description != '' ? $application->description : 'N/A') ?></td>
                <td><?= $this->Number->format($application->prix) ?></td>
                <td><?= $this->Number->format($application->evaluation) ?></td>
                <!-- <td><?= h($application->created) ?></td>
                <td><?= h($application->modified) ?></td> -->
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $application->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $application->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $application->id], ['confirm' => __('Are you sure you want to delete # {0}?', $application->id)]) ?>
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
