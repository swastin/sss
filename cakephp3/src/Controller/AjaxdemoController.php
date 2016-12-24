<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;
class AjaxdemoController extends AppController
{
  public function beforeFilter(Event $event){
    $this->loadmodel('Ajaxdemo');
    }
    public function index()
    {
        if ($this->request->is('post')) 
         {  
            if($this->request->data('id')){
            $ajaxdemo = $this->Ajaxdemo->get($this->request->data('id'));
            }else{
            $ajaxdemo = $this->Ajaxdemo->newEntity();
            }
            $ajaxdemo = $this->Ajaxdemo->patchEntity($ajaxdemo, $this->request->data);
           // pr($ajaxdemo);exit;
            if ($this->Ajaxdemo->save($ajaxdemo)) {
                $this->Flash->success(__('The ajaxdemo has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else 
            {
                $this->Flash->error(__('The ajaxdemo could not be saved. Please, try again.'));
            }
        }
        $data = $this->Ajaxdemo->find('all');
        $this->set(compact('data'));

        }
     public function deleteajaxdemo($id=null)
    {
         //$this->request->allowMethod(['post', 'delete']);
        //$this->request->allowMethod(['post','delete']);
        $ajaxdemo = $this->Ajaxdemo->get($id);
        if ($this->Ajaxdemo->delete($ajaxdemo)) {
            $this->Flash->success(__('The ajaxdemo has been deleted.'));
        } else {
            $this->Flash->error(__('The ajaxdemo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

   public function editajaxdemo()
    {
        $id=$this->request->data('id');
     if($this->request->is("post")){
        
         $ajaxdemo=$this->Ajaxdemo->find('all')->where(array('id' =>$id))->first();
         if(!empty($ajaxdemo)){
          echo json_encode($ajaxdemo);
         } else{
          echo 0;
         }
exit;
     }   
}
}
?>


    
