<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ajaxdemo Controller
 *
 * @property \App\Model\Table\AjaxdemoTable $Ajaxdemo
 */
class AjaxdemoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $ajaxdemo = $this->paginate($this->Ajaxdemo);

        $this->set(compact('ajaxdemo'));
        $this->set('_serialize', ['ajaxdemo']);
    }

    /**
     * View method
     *
     * @param string|null $id Ajaxdemo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ajaxdemo = $this->Ajaxdemo->get($id, [
            'contain' => []
        ]);

        $this->set('ajaxdemo', $ajaxdemo);
        $this->set('_serialize', ['ajaxdemo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ajaxdemo = $this->Ajaxdemo->newEntity();
        if ($this->request->is('post')) {
            $ajaxdemo = $this->Ajaxdemo->patchEntity($ajaxdemo, $this->request->data);
            if ($this->Ajaxdemo->save($ajaxdemo)) {
                $this->Flash->success(__('The ajaxdemo has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ajaxdemo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('ajaxdemo'));
        $this->set('_serialize', ['ajaxdemo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ajaxdemo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ajaxdemo = $this->Ajaxdemo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ajaxdemo = $this->Ajaxdemo->patchEntity($ajaxdemo, $this->request->data);
            if ($this->Ajaxdemo->save($ajaxdemo)) {
                $this->Flash->success(__('The ajaxdemo has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ajaxdemo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('ajaxdemo'));
        $this->set('_serialize', ['ajaxdemo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ajaxdemo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ajaxdemo = $this->Ajaxdemo->get($id);
        if ($this->Ajaxdemo->delete($ajaxdemo)) {
            $this->Flash->success(__('The ajaxdemo has been deleted.'));
        } else {
            $this->Flash->error(__('The ajaxdemo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
