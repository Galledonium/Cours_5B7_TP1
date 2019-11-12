<?php
   namespace App\Controller;
   use App\Controller\AppController;
   use Cake\I18n\I18n;

    class LocalizationsController extends AppController{

        public function isAuthorized($user)
        {
            $action = $this->request->getParam('action');
            
            if($user['permissions'] === 1 || $user['permissions'] === 2){

                return true;

            }

            return false;

        }
      
        public function index(){
            if($this->request->is('post')){
                $locale = $this->request->data('locale');

                parent::changeLang($locale);

                return $this->redirect(['controller' => 'Applications', 'action' => 'index']);
            }
        } 
    }
?>