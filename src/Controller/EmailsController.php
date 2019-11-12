<?php
   namespace App\Controller;
   use App\Controller\AppController;
   use Cake\Mailer\Email;

   class EmailsController extends AppController{
    
    public function isAuthorized($userCourant)
    {

        if($userCourant['permissions'] === 1 || $userCourant['permissions'] === 2){

            return true;

        }

    }
    
    public function index(){
         $email = new Email('default');
         $email->to('gregsondestin@gmail.com')->subject('About')->send('My message');
      }
   }
?>