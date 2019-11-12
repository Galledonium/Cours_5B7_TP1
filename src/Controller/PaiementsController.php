<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Paiements Controller
 *
 * @property \App\Model\Table\PaiementsTable $Paiements
 *
 * @method \App\Model\Entity\Paiement[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PaiementsController extends AppController
{

    private $userEnLigne;


    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['logout', 'add']);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Applications', 'TypesPaiements', 'Users']
        ];
        // $paiements = $this->paginate($this->Paiements);

        $tablePaiements = TableRegistry::get('Paiements');

        $tablePaiements = TableRegistry::getTableLocator()->get('Paiements');

        if($this->userEnLigne['permissions'] == 1){

            $paiements = $this->paginate($tablePaiements->find()
            ->where(['user_id' => $this->userEnLigne['id']]));

        }else if($this->userEnLigne['permissions'] == 2){

            $paiements = $this->paginate($this->Paiements);

        }
        // $users = $this->paginate($this->Users);


        // $this->set(compact('users'));

        $this->set(compact('paiements'));
    }

    public function isAuthorized($userCourant)
    {

        $action = $this->request->getParam('action');

        $this->userEnLigne = $userCourant;


        if($userCourant['permissions'] === 0){

            return false;

        }
        if($userCourant['permissions'] === 1){

            if(in_array($action, ['delete'])){

                return false;

            }

        }

        return true;

    }

    /**
     * View method
     *
     * @param string|null $id Paiement id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $paiement = $this->Paiements->get($id, [
            'contain' => ['Applications', 'TypesPaiements']
        ]);

        $this->set('paiement', $paiement);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->request->getSession()->read('Auth.User');

        $paiement = $this->Paiements->newEntity();
        if ($this->request->is('post')) {
            $paiement = $this->Paiements->patchEntity($paiement, $this->request->getData());
            if ($this->Paiements->save($paiement)) {
                $this->Flash->success(__('The paiement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The paiement could not be saved. Please, try again.'));
        }
        $applications = $this->Paiements->Applications->find('list', ['limit' => 200]);
        $typesPaiements = $this->Paiements->TypesPaiements->find('list', ['limit' => 200, 'valueField' => 'typePaiement']);
        $users = $this->Paiements->Users->find('list', ['limit' => 200])->where(['id' => $user['id']]);

        // debug($users = $tablePaiements->find()->where(['user_id' => $this->userEnLigne['id']]));
        // die();
        
        $this->set(compact('paiement', 'applications', 'typesPaiements', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Paiement id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $paiement = $this->Paiements->get($id, [
        
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paiement = $this->Paiements->patchEntity($paiement, $this->request->getData());
            if ($this->Paiements->save($paiement)) {
                $this->Flash->success(__('The paiement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The paiement could not be saved. Please, try again.'));
        }
        $applications = $this->Paiements->Applications->find('list', ['limit' => 200]);
        $typesPaiements = $this->Paiements->TypesPaiements->find('list', ['limit' => 200]);
        $this->set(compact('paiement', 'applications', 'typesPaiements'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Paiement id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $paiement = $this->Paiements->get($id);
        if ($this->Paiements->delete($paiement)) {
            $this->Flash->success(__('The paiement has been deleted.'));
        } else {
            $this->Flash->error(__('The paiement could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
