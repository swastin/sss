<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use App\Controller\Component;
/**
 * Register Controller
 *
 * @property \App\Model\Table\RegisterTable $Register
 */
class RegisterController extends AppController
{
  public function beforeFilter(Event $event)
        {

             parent::beforeFilter($event);
             //$this->Auth->config('authenticate', ['Form']);
             $this->loadModel('Register');
           //  $this->loadComponet('Auth');
         }
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
   public function index()
         {
            $register = $this->Register->newEntity();
            if ($this->request->is('post')) 
            {
                $register = $this->Register->patchEntity($register, $this->request->data);
                if ($this->Register->save($register)){
                    $this->Flash->success(__('The register has been saved.'));
                    return $this->redirect(['action' => 'login']);
                }else{
                    $this->Flash->error('The register could not be saved. Please, try again.');
                }
            }
            $this->set('register', $register);

        }
    public function adminpannel(){
            $register= $this->Register->find('all');
            $this->set(compact('register'));
        }
        public function edit($id = null){
            $register = $this->Register->get($id);
            if ($this->request->is(['post', 'put'])) {
                $this->Register->patchEntity($register, $this->request->data);
                if ($this->Register->save($register)) {
                    $this->Flash->success(__('Your article has been updated.'));
                    return $this->redirect("/register/adminpannel");        }
                    $this->Flash->error(__('Unable to update your article.'));
                }

                $this->set('register', $register);
            }

            public function delete($id)
            {
                $this->request->allowMethod(['post', 'delete']);

                $register = $this->Register->get($id);
                if ($this->Register->delete($register)) {
                    $this->Flash->success(__('The article with id: {0} has been deleted.', h($id)));
                    return $this->redirect("/register/adminpannel");
                }
            }


        public function login() {
            if (!empty($this->request->is("post"))) {
                $username = $this->request->data("emailid");
                $password = $this->request->data("password");
              //  $options = array('conditions' => array('emailid' => $username, 'password' => $password, ),);
               /*pr($options);
               exit();*/
                $data = $this->Register->find()->where(['emailid' => $username, 'password' => $password])->first();
                //$useradata = $this->Adminlogins->find()->where(array('type' => 1))->first();
                if ($username == $data['emailid'] && $password == $data['password']) {
                    $session = $this->request->session();
                    $session->write('username', $username);
                    $session->write('userid', $data['id']);
                    return $this->redirect(['controller'=>'register','action'=>"adminpannel"]);
                } else {
                                $this->Flash->error('Please enter your Username and Password Again');
                }
            } else {
                     $this->Flash->error('Please enter your Username and Password Again');

            }
        }
}
?>
