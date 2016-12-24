<?php
namespace App\Controller;
use Cake\Event\Event;
use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class ExampleController extends AppController
{


    public function beforeFilter(Event $event)
    {
          $this->loadModel('Articles');
          $this->loadModel('Books');
         
        
    }
public function index()
    {
        $articles = $this->Articles->find('all');
        $this->set(compact('articles'));
    }

 public function view($id = null)
    {
//$article=$this->Articles->find()->select(['id', 'title'])->where(['id !=' => 1])->order(['created' => 'DESC']);
      $article = $this->Articles->get($id);
        $this->set(compact('article'));
    }
     public function add()
    {
        $article = $this->Articles->newEntity();
        if ($this->request->is('post')) {
            $article = $this->Articles->patchEntity($article, $this->request->data);
            if ($this->Articles->save($article)) {
                $this->Flash->success(__('Your article has been saved.'));
                    return $this->redirect("/example/index");            }
            $this->Flash->error(__('Unable to add your article.'));
        }
        $this->set('article', $article);
    }
public function edit($id = null)
{

    $article = $this->Articles->get($id);
    if ($this->request->is(['post', 'put'])) {
        $this->Articles->patchEntity($article, $this->request->data);
        if ($this->Articles->save($article)) {
            $this->Flash->success(__('Your article has been updated.'));
                return $this->redirect("/example/index");        }
        $this->Flash->error(__('Unable to update your article.'));
    }

    $this->set('article', $article);
}
public function delete($id)
{
    $this->request->allowMethod(['post', 'delete']);

    $article = $this->Articles->get($id);
    if ($this->Articles->delete($article)) {
        $this->Flash->success(__('The article with id: {0} has been deleted.', h($id)));
        return $this->redirect("/example/index");
    }
}
public function index1()
    {
        $books = $this->Books->find('all');
        $this->set(compact('books'));
    }

 public function view1($id = null)
    {
//$article=$this->Articles->find()->select(['id', 'title'])->where(['id !=' => 1])->order(['created' => 'DESC']);
      $books= $this->Books->get($id);
        $this->set(compact('books'));
    }
     public function add1()
    {
        $book = $this->Books->newEntity();
        if ($this->request->is('post')) {
            $book = $this->Books->patchEntity($book, $this->request->data);
            if ($this->Books->save($book)) {
                $this->Flash->success(__('The book has been saved.'));

               return $this->redirect("/example/index1");
            } else {
                $this->Flash->error(__('The book could not be saved. Please, try again.'));
            }
        }
        //$authors = $this->Books->Authors->find('list', ['limit' => 200]);
        $this->set(compact('book', 'book'));
    }
public function edit1($id = null)
{

    $books = $this->Books->get($id);
    if ($this->request->is(['post', 'put'])) {
        $this->Books->patchEntity($books, $this->request->data);
        if ($this->Books->save($books)) {
            $this->Flash->success(__('Your book has been updated.'));
                return $this->redirect("/example/index1");    
    $this->Flash->error(__('Unable to update your book.'));
    }

    $this->set('books', $Books);
}
}
public function delete1($id)
{
    $this->request->allowMethod(['post', 'delete']);

    $books = $this->Books->get($id);
    if ($this->Books->delete($books)) {
        $this->Flash->success(__('The article with id: {0} has been deleted.', h($id)));
        return $this->redirect("/example/index1");
    }




}
}
?>