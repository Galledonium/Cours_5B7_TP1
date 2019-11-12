<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ApplicationsUsers Controller
 *
 * @property \App\Model\Table\ApplicationsUsersTable $ApplicationsUsers
 *
 * @method \App\Model\Entity\ApplicationsUser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ApplicationsUsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Applications']
        ];
        $applicationsUsers = $this->paginate($this->ApplicationsUsers);

        $this->set(compact('applicationsUsers'));
    }

    public function isAuthorized($userCourant)
    {

        if($userCourant['permissions'] !== 2){

            return false;

        }

        return true;

    }

    /**
     * View method
     *
     * @param string|null $id Applications User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $applicationsUser = $this->ApplicationsUsers->get($id, [
            'contain' => ['Users', 'Applications']
        ]);

        $this->set('applicationsUser', $applicationsUser);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $applicationsUser = $this->ApplicationsUsers->newEntity();
        if ($this->request->is('post')) {
            $applicationsUser = $this->ApplicationsUsers->patchEntity($applicationsUser, $this->request->getData());
            if ($this->ApplicationsUsers->save($applicationsUser)) {
                $this->Flash->success(__('The applications user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The applications user could not be saved. Please, try again.'));
        }
        $users = $this->ApplicationsUsers->Users->find('list', ['limit' => 200]);
        $applications = $this->ApplicationsUsers->Applications->find('list', ['limit' => 200]);
        $this->set(compact('applicationsUser', 'users', 'applications'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Applications User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $applicationsUser = $this->ApplicationsUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $applicationsUser = $this->ApplicationsUsers->patchEntity($applicationsUser, $this->request->getData());
            if ($this->ApplicationsUsers->save($applicationsUser)) {
                $this->Flash->success(__('The applications user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The applications user could not be saved. Please, try again.'));
        }
        $users = $this->ApplicationsUsers->Users->find('list', ['limit' => 200]);
        $applications = $this->ApplicationsUsers->Applications->find('list', ['limit' => 200]);
        $this->set(compact('applicationsUser', 'users', 'applications'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Applications User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $applicationsUser = $this->ApplicationsUsers->get($id);
        if ($this->ApplicationsUsers->delete($applicationsUser)) {
            $this->Flash->success(__('The applications user has been deleted.'));
        } else {
            $this->Flash->error(__('The applications user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
