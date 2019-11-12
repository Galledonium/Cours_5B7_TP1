<?php
   namespace App\Controller;
   use App\Controller\AppController;
   use Cake\I18n\I18n;

    class AProposController extends AppController{

        public function isAuthorized($user)
        {
            return true;
        }
      
        public function index(){
            if($this->request->is('post')){

                return $this->redirect(['controller' => 'Applications', 'action' => 'index']);

            }
        } 
    }
?>