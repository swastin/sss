<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Itemstock Controller
 *
 * @property \App\Model\Table\ItemstockTable $Itemstock
 */
class ItemstockController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $itemstock = $this->paginate($this->Itemstock);

        $this->set(compact('itemstock'));
        $this->set('_serialize', ['itemstock']);
    }

    /**
     * View method
     *
     * @param string|null $id Itemstock id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $itemstock = $this->Itemstock->get($id, [
            'contain' => []
        ]);

        $this->set('itemstock', $itemstock);
        $this->set('_serialize', ['itemstock']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $itemstock = $this->Itemstock->newEntity();
        if ($this->request->is('post')) {
            $itemstock = $this->Itemstock->patchEntity($itemstock, $this->request->data);
            if ($this->Itemstock->save($itemstock)) {
                $this->Flash->success(__('The itemstock has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The itemstock could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('itemstock'));
        $this->set('_serialize', ['itemstock']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Itemstock id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $itemstock = $this->Itemstock->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $itemstock = $this->Itemstock->patchEntity($itemstock, $this->request->data);
            if ($this->Itemstock->save($itemstock)) {
                $this->Flash->success(__('The itemstock has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The itemstock could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('itemstock'));
        $this->set('_serialize', ['itemstock']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Itemstock id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $itemstock = $this->Itemstock->get($id);
        if ($this->Itemstock->delete($itemstock)) {
            $this->Flash->success(__('The itemstock has been deleted.'));
        } else {
            $this->Flash->error(__('The itemstock could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
