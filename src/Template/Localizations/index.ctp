<?php
   echo $this->Form->create("Localizations",array('url'=>'/locale'));
   echo $this->Form->radio("locale",[
      ['value'=>'en_US','text'=>__('traductionAnglais')],
      ['value'=>'fr_CA','text'=>__('traductionFrancais')],
      ['value'=>'ja_JP','text'=>__('traductionJaponais')]
   ]);
   echo $this->Form->button(__('langchg'));
   echo $this->Form->end();
?>