<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TypesPaiements Controller
 *
 * @property \App\Model\Table\TypesPaiementsTable $TypesPaiements
 *
 * @method \App\Model\Entity\TypesPaiement[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TypesPaiementsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $typesPaiements = $this->paginate($this->TypesPaiements);

        $this->set(compact('typesPaiements'));
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
     * @param string|null $id Types Paiement id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typesPaiement = $this->TypesPaiements->get($id, [
            'contain' => []
        ]);

        $this->set('typesPaiement', $typesPaiement);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typesPaiement = $this->TypesPaiements->newEntity();
        if ($this->request->is('post')) {
            $typesPaiement = $this->TypesPaiements->patchEntity($typesPaiement, $this->request->getData());
            if ($this->TypesPaiements->save($typesPaiement)) {
                $this->Flash->success(__('The types paiement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The types paiement could not be saved. Please, try again.'));
        }
        $this->set(compact('typesPaiement'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Types Paiement id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typesPaiement = $this->TypesPaiements->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typesPaiement = $this->TypesPaiements->patchEntity($typesPaiement, $this->request->getData());
            if ($this->TypesPaiements->save($typesPaiement)) {
                $this->Flash->success(__('The types paiement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The types paiement could not be saved. Please, try again.'));
        }
        $this->set(compact('typesPaiement'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Types Paiement id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typesPaiement = $this->TypesPaiements->get($id);
        if ($this->TypesPaiements->delete($typesPaiement)) {
            $this->Flash->success(__('The types paiement has been deleted.'));
        } else {
            $this->Flash->error(__('The types paiement could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
