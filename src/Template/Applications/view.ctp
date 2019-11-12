<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Application $application
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Application'), ['action' => 'edit', $application->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Application'), ['action' => 'delete', $application->id], ['confirm' => __('Are you sure you want to delete # {0}?', $application->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Applications'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Application'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Paiements'), ['controller' => 'Paiements', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paiement'), ['controller' => 'Paiements', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="applications view large-9 medium-8 columns content">
    <h3><?= h($application->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Prix') ?></th>
            <td><?= $this->Number->format($application->prix) . ' $' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($application->description != '' ? $application->description : 'N/A') ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Evaluation') ?></th>
            <td><?= $this->Number->format($application->evaluation) ?></td>
        </tr>
        <!-- <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($application->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($application->modified) ?></td>
        </tr> -->
    </table>
    <!-- <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($application->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Username') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($application->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->username) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->email) ?></td>
                <td><?= h($users->created) ?></td>
                <td><?= h($users->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div> -->
    <!-- <div class="related">
        <h4><?= __('Related Paiements') ?></h4>
        <?php if (!empty($application->paiements)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('No. Facture') ?></th>
                <th scope="col"><?= __('Type Paiement Id') ?></th>
                <th scope="col"><?= __('Numero Carte') ?></th>
                 <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th> 
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($application->paiements as $paiements): ?>
            <tr>
                <td><?= h($paiements->id) ?></td>
                <td><?= h($paiements->type_paiement_id)?></td>
                <td><?= h('************' . substr($paiements->numero_carte, 10)) ?></td>
                <td><?= h($paiements->created) ?>
                <td><?= h($paiements->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Paiements', 'action' => 'view', $paiements->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Paiements', 'action' => 'edit', $paiements->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Paiements', 'action' => 'delete', $paiements->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paiements->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div> -->
    <?php

        $user = $this->request->getSession()->read('Auth.User');

        if($user['permissions'] === 2){

            echo '<h1>Upload File</h1>';
            echo '<div class="content">';
                $this->Flash->render();
                echo '<div class="upload-frm">';
                    echo $this->Form->create($uploadData, ['type' => 'file']);
                        echo $this->Form->input('file', ['type' => 'file', 'class' => 'form-control']);
                        echo $this->Form->button(__('Upload File'), ['type'=>'submit', 'class' => 'form-controlbtn btn-default']);
                echo '</div>';
            echo '</div>';

        }
    ?>
    <h1>Images</h1>
    <div class="content">
    <!-- Table -->
        <table class="table">
            <tr>
                <th width="20%">File</th>

                <?php

                    $userCourant = $this->request->getSession()->read('Auth.User');

                    // if($userCourant['permissions'] === 2){

                    //     echo '<th width="12%">' . __('msgActions') . '</th>';

                    // }

                ?>
            </tr>
            <?php if($filesRowNum > 0):$count = 0; foreach($files as $file): $count++;?>
                <tr>
                    <td><?php
                    echo $this->Html->image($file->path . $file->name, [
                        "alt"  => $file->name,
                        "width" => "220px",
                        "height" => "150px"
                    ]);
                    ?></td>
                    <!--<td><img src="<?= $file->path.$file->name ?>" width="220px" height="150px"></td>-->

                    <!-- <td><embed src="uploads/files/apps.45782.9007199266731945.debbc4f1-cde0-491b-8c6f-b6b015eecab6.png" width="220px" height="150px"></td> -->
                    <!-- <td>
                        <?php
                    
                            $userCourant = $this->request->getSession()->read('Auth.User');

                                if($userCourant['permissions'] === 2){
                                
                                    echo $this->Html->link(__('Delete'), ['controller' => 'Files', 'action' => 'delete', $file->id]);

                                }
                        ?>
                    </td> -->
                        
                </tr>
            <?php endforeach; else:?>
            <tr><td colspan="3">No file(s) found......</td>
            <?php endif; ?>
    </table>
</div>
</div>


