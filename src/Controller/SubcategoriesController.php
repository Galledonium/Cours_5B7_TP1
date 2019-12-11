<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Subcategories Controller
 *
 * @property \App\Model\Table\SubcategoriesTable $Subcategories
 *
 * @method \App\Model\Entity\Subcategory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SubcategoriesController extends AppController
{

<<<<<<< HEAD
    public function initialize()
    {
        parent::initialize();

        $this->viewBuilder()->setLayout('monopage');
    }

=======
>>>>>>> parent of 2dd9a9e... Monopage
    public $paginate = [
        'page' => 1,
        'limit' => 10,
        'maxLimit' => 100,
<<<<<<< HEAD
        // 'fields' => [
        //     'id', 'category_id', 'name'
        // ],
=======
        'fields' => [
            'id', 'category_id', 'name'
        ],
>>>>>>> parent of 2dd9a9e... Monopage
        'sortWhitelist' => [
            'id', 'category_id', 'name'
        ]
    ];
<<<<<<< HEAD

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categories']
        ];
        $subcategories = $this->paginate($this->Subcategories);
=======
    // /**
    //  * Index method
    //  *
    //  * @return \Cake\Http\Response|null
    //  */
    // public function index()
    // {
    //     $this->paginate = [
    //         'contain' => ['Categories']
    //     ];
    //     $subcategories = $this->paginate($this->Subcategories);
>>>>>>> parent of 2dd9a9e... Monopage

    //     $this->set(compact('subcategories'));
    // }

    // public function isAuthorized($user) {
    //     // All actions are allowed to logged in users for subcategories.
    //     return true;
    // }

    // /**
    //  * View method
    //  *
    //  * @param string|null $id Subcategory id.
    //  * @return \Cake\Http\Response|null
    //  * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
    //  */
    // public function view($id = null)
    // {
    //     $subcategory = $this->Subcategories->get($id, [
    //         'contain' => ['Categories']
    //     ]);

    //     $this->set('subcategory', $subcategory);
    // }

    // public function getByCategory() {
    //     $category_id = $this->request->query('category_id');

    //     $subcategories = $this->Subcategories->find('all', [
    //         'conditions' => ['Subcategories.category_id' => $category_id],
    //     ]);
    //     $this->set('subcategories', $subcategories);
    //     $this->set('_serialize', ['subcategories']);
    // }

    // /**
    //  * Add method
    //  *
    //  * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
    //  */
    // public function add()
    // {
    //     $subcategory = $this->Subcategories->newEntity();
    //     if ($this->request->is('post')) {
    //         $subcategory = $this->Subcategories->patchEntity($subcategory, $this->request->getData());
    //         if ($this->Subcategories->save($subcategory)) {
    //             $this->Flash->success(__('The subcategory has been saved.'));

    //             return $this->redirect(['action' => 'index']);
    //         }
    //         $this->Flash->error(__('The subcategory could not be saved. Please, try again.'));
    //     }
    //     $categories = $this->Subcategories->Categories->find('list', ['limit' => 200]);
    //     $this->set(compact('subcategory', 'categories'));
    // }

    // /**
    //  * Edit method
    //  *
    //  * @param string|null $id Subcategory id.
    //  * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
    //  * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
    //  */
    // public function edit($id = null)
    // {
    //     $subcategory = $this->Subcategories->get($id, [
    //         'contain' => []
    //     ]);
    //     if ($this->request->is(['patch', 'post', 'put'])) {
    //         $subcategory = $this->Subcategories->patchEntity($subcategory, $this->request->getData());
    //         if ($this->Subcategories->save($subcategory)) {
    //             $this->Flash->success(__('The subcategory has been saved.'));

    //             return $this->redirect(['action' => 'index']);
    //         }
    //         $this->Flash->error(__('The subcategory could not be saved. Please, try again.'));
    //     }
    //     $categories = $this->Subcategories->Categories->find('list', ['limit' => 200]);
    //     $this->set(compact('subcategory', 'categories'));
    // }

    // /**
    //  * Delete method
    //  *
    //  * @param string|null $id Subcategory id.
    //  * @return \Cake\Http\Response|null Redirects to index.
    //  * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
    //  */
    // public function delete($id = null)
    // {
    //     $this->request->allowMethod(['post', 'delete']);
    //     $subcategory = $this->Subcategories->get($id);
    //     if ($this->Subcategories->delete($subcategory)) {
    //         $this->Flash->success(__('The subcategory has been deleted.'));
    //     } else {
    //         $this->Flash->error(__('The subcategory could not be deleted. Please, try again.'));
    //     }

    //     return $this->redirect(['action' => 'index']);
    // }
}
