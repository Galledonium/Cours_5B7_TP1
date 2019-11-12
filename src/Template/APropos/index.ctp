<?php
   echo "Nom: Gregson Destin";
   echo "</br> Cours 420-5B7-MO Applications Internet";
   echo "</br>
        <ul>Interactions
            <li>Par défaut, le site web nous met sur l'index de Applications. Un login est cependant necessaire.</li>
            <li>Le user peut choisir de se créer un compte avec 'se créer un compte' mais il n'y a pas encore de courriel de confirmation.</li>
            <li>L'onglet langue permet de changer l'index Applications dans les langues suivantes: francais, anglais et japonais.</li>
            <li>L'utilisateur normal a seulement acces a ses factures, son compte, et la liste d'applications. Il peut également voir la view de Application et consulter les images </li>
            <li>L'administrateur a accès a toutes les pages, et pourra eventuellement enlever les images associées a une application</li>

        </ul>";

    echo "</br>
          <ul>Comptes users</ul>
            <li>testboy2@gmail.com - Mot de passe: testboy2 - Compte utilisateur normal</li>
            <li>testboy4@gmail.com - Mot de passe: testboy4 - Compte admin</li>
          </ul>";

    echo "</br><strong>Diagramme du site web</strong>";

    $uploadPath = 'uploads/files/';
    echo $this->Html->image($uploadPath . "diagramme.png", [
            "alt"  => "diagramme",
            "width" => "640px",
            "height" => "360px"
    ]);

    echo "</br><strong>Diagramme original</strong>";

    echo $this->Html->image($uploadPath . "diagramme_original.png", [
            "alt"  => "diagramme",
            'url' => "http://www.databaseanswers.org/data_models/mobile_purchases/index.htm"
    ]);

    echo "</br>" . $this->Html->link(__('Retour'), ['controller' => 'Applications', 'action' => 'index']);

?>