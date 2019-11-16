<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Entity\ListeApplication;

/**
 * Applications Controller
 *
 * @property \App\Model\Table\ApplicationsTable $Applications
 *
 * @method \App\Model\Entity\Application[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ApplicationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Files', 'Subcategories', 'Categories']
        ];
        $applications = $this->paginate($this->Applications);

        $this->set(compact('applications'));
    }

    public function isAuthorized($userCourant)
    {
        return true;

    }

    /**
     * View method
     *
     * @param string|null $id Application id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $application = $this->Applications->get($id, [
            'contain' => ['Files', 'Subcategories', 'Categories', 'Users', 'Paiements']
        ]);

        $this->set('application', $application);
    }

    /**
     * findApps method
     * for use with JQuery-UI Autocomplete
     *
     * @return JSon query result
     */
    public function findApps() {

        if ($this->request->is('ajax')) {

            $this->autoRender = false;
            $name = $this->request->query['term'];

            $results = $this->Applications->find('all', array(
                'conditions' => array('Applications.name LIKE ' => '%' . $name . '%')
            ));

            $resultArr = array();
            foreach ($results as $result) {
                $resultArr[] = array('label' => $result['name'], 'value' => $result['name']);
            }

            echo json_encode($resultArr);
        }
    }

    public function autocompletedemo() {
        
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $application = $this->Applications->newEntity();
        if ($this->request->is('post')) {
            $application = $this->Applications->patchEntity($application, $this->request->getData());
            if ($this->Applications->save($application)) {
                $this->Flash->success(__('The application has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The application could not be saved. Please, try again.'));
        }
        $files = $this->Applications->Files->find('list', ['limit' => 200]);
        $subcategories = $this->Applications->Subcategories->find('list', ['limit' => 200]);
        $categories = $this->Applications->Categories->find('list', ['limit' => 200]);
        $users = $this->Applications->Users->find('list', ['limit' => 200]);
        $this->set(compact('application', 'files', 'subcategories', 'categories', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Application id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $application = $this->Applications->get($id, [
            'contain' => ['Users']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $application = $this->Applications->patchEntity($application, $this->request->getData());
            if ($this->Applications->save($application)) {
                $this->Flash->success(__('The application has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The application could not be saved. Please, try again.'));
        }
        $files = $this->Applications->Files->find('list', ['limit' => 200]);
        
        $categories = $this->Applications->Categories->find('list', ['limit' => 200]);

        $category_id = $application->categorie_id;

        // Bâtir la liste des sous-catégories reliées à cette catégorie
        $subcategories = $this->Applications->Subcategories->find('list', [
            'conditions' => ['Subcategories.category_id' => $category_id],
        ]);
        $users = $this->Applications->Users->find('list', ['limit' => 200]);
        $this->set(compact('application', 'files', 'subcategories', 'categories', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Application id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $application = $this->Applications->get($id);
        if ($this->Applications->delete($application)) {
            $this->Flash->success(__('The application has been deleted.'));
        } else {
            $this->Flash->error(__('The application could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
