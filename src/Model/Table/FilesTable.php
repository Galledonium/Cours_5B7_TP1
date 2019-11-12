<?php
// src/Model/Table/FilesTable.php

namespace App\Model\Table;

use Cake\ORM\Table;

class FilesTable extends Table
{
    

    public function initialize(array $config){

        $this->setTable('files');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        
        $this->belongsToMany('Applications', [
            'foreignKey' => 'files_id',
            'targetForeignKey' => 'application_id',
        ]);
    }
    
}