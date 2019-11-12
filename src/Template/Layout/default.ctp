
<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __('msgDesc');
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch(__('msgTitre')) ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li>
                    <?php

                        $loguser = $this->request->session()->read('Auth.User');
                    
                        if ($loguser) {
                            $user = $loguser['username'];
                            echo $this->Html->link(__('msgBienvenue') . ', ' . $user, ['controller' => 'Users', 'action' => 'view', $loguser['id']]);
                        
                        } else {

                            echo $this->Html->link(__('msglogin'), ['controller' => 'Users', 'action' => 'login']);
                            
                        }

                    ?>
                    <!-- <li><a target="_blank" href="https://book.cakephp.org/3.0/">Documentation</a></li>
                    <li><a target="_blank" href="https://api.cakephp.org/3.0/">API</a></li> -->
                </li>
                
                <li>
                <?php

                        $loguser = $this->request->session()->read('Auth.User');
                    
                        if (!$loguser) {
                            $user = $loguser['username'];
                            echo $this->Html->link(__('msgCreerCompte'), ['controller' => 'Users', 'action' => 'add']);
                        
                        }

                    ?>
                </li>

                <li>

                    <?php

                        $loguser = $this->request->session()->read('Auth.User');

                        if($loguser){
                            
                            echo $this->Html->link(__('msglogout'), ['controller' => 'Users', 'action' => 'logout']);

                        }

                    ?>
                
                </li>
                
                <li>

                    <?php

                        echo $this->Html->link(__('lang'), ['controller' => 'Localizations', 'action' => 'index']);

                    ?>
                
                </li>

                <li>

                    <?php

                        echo $this->Html->link(__('msgAPropos'), ['controller' => 'APropos', 'action' => 'index']);

                    ?>

                </li>

            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
