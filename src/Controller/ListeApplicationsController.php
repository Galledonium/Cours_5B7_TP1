<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ListeApplications Controller
 *
 * @property \App\Model\Table\ListeApplicationsTable $ListeApplications
 *
 * @method \App\Model\Entity\ListeApplication[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ListeApplicationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $listeApplications = $this->paginate($this->ListeApplications);

        $this->set(compact('listeApplications'));
    }

    /**
     * View method
     *
     * @param string|null $id Liste Application id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $listeApplication = $this->ListeApplications->get($id, [
            'contain' => []
        ]);

        $this->set('listeApplication', $listeApplication);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $listeApplication = $this->ListeApplications->newEntity();
        if ($this->request->is('post')) {
            $listeApplication = $this->ListeApplications->patchEntity($listeApplication, $this->request->getData());
            if ($this->ListeApplications->save($listeApplication)) {
                $this->Flash->success(__('The liste application has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The liste application could not be saved. Please, try again.'));
        }
        $this->set(compact('listeApplication'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Liste Application id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $listeApplication = $this->ListeApplications->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $listeApplication = $this->ListeApplications->patchEntity($listeApplication, $this->request->getData());
            if ($this->ListeApplications->save($listeApplication)) {
                $this->Flash->success(__('The liste application has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The liste application could not be saved. Please, try again.'));
        }
        $this->set(compact('listeApplication'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Liste Application id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $listeApplication = $this->ListeApplications->get($id);
        if ($this->ListeApplications->delete($listeApplication)) {
            $this->Flash->success(__('The liste application has been deleted.'));
        } else {
            $this->Flash->error(__('The liste application could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
