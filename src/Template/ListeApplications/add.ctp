<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ListeApplication $listeApplication
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Liste Applications'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="listeApplications form large-9 medium-8 columns content">
    <?= $this->Form->create($listeApplication) ?>
    <fieldset>
        <legend><?= __('Add Liste Application') ?></legend>
        <?php
            echo $this->Form->control('nom');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
