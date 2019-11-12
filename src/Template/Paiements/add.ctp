<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Paiement $paiement
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('msgAfficherPaiements'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Applications'), ['controller' => 'Applications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Application'), ['controller' => 'Applications', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Types Paiements'), ['controller' => 'TypesPaiements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Types Paiement'), ['controller' => 'TypesPaiements', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="paiements form large-9 medium-8 columns content">
    <?= $this->Form->create($paiement) ?>
    <fieldset>
        <legend><?= __('Add Paiement') ?></legend>
        <?php
            $user = $this->request->getSession()->read('Auth.User');
        
            echo $this->Form->control('application_id', ['options' => $applications]);
            echo $this->Form->control('type_paiement_id', ['options' => $typesPaiements]);
            echo $this->Form->control('user_id', ['options' => $users, 'type' => 'hidden', 'default' => $user['id']]);
            echo $this->Form->control('numero_carte');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
