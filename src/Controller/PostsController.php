<?php
namespace App\Controller;
use Cake\Controller\Controller;

class PostsController extends Controller{
	private $posts;
	public function initialize(){
		parent::initialize();
		$this->loadComponent('Flash');
	}
	public function index(){
		$posts=$this->Posts->find('all',array('order'=>array('created'=>'desc')));
        $this->set(compact('posts'));
	}
	public function home(){
		$this->viewBuilder()->layout('adminLayout');
		$posts=$this->Posts->find('all',array('order'=>array('created'=>'desc')));
        $this->set(compact('posts'));
	}
	public function create(){
		$this->viewBuilder()->layout('adminLayout');
        //Get Post for the sidebar
        $posts=$this->Posts->find('all');
        $this->set(compact('posts'));

        //Adding data to the database
        $post=$this->Posts->newEntity();
        //Checking GET or POST
        if($this->request->is('post')){
            $post=$this->Posts->patchEntity($post,$this->request->data);
            if($this->Posts->save($post)){
                $this->Flash->success(__('Post Created'));
                return $this->redirect(['action'=>'home']);
            }
            $this->Flash->error(__('Unable to save post'));
        }
        $this->set('post',$post);   
    }
    public function view($id){
    	$this->viewBuilder()->layout('adminLayout');
        $posts=$this->Posts->find('all');
        $post=$this->Posts->get($id);   //Fetching the row having id=$id from the table 'Posts'
        
        $this->set(compact('posts','post'));
    }
    public function edit($id){
    	$this->viewBuilder()->layout('adminLayout');
        //Get Post for the sidebar
        $posts=$this->Posts->find('all');
        $this->set(compact('posts'));

        //Fetching data from the database
        $post=$this->Posts->get($id);
        //Checking GET or POST
        if($this->request->is(['post','put'])){
            $this->Posts->patchEntity($post,$this->request->data);
            if($this->Posts->save($post)){
                $this->Flash->success(__('Post Updated'));
                return $this->redirect(['action'=>'home']);
            }
            $this->Flash->error(__('Unable to Update post'));
        }
        $this->set('post',$post);
    }
    public function delete($id){
    	$this->viewBuilder()->layout('adminLayout');
        $this->request->allowMethod(['post','delete']);
        $post=$this->Posts->get($id);

        if($this->Posts->delete($post)){
            $this->Flash->success(__('Post Deleted'));
            return $this->redirect(['action'=>'home']);
        }
    }
    public function display($id){
        $posts=$this->Posts->find('all');
        $post=$this->Posts->get($id);   //Fetching the row having id=$id from the table 'Posts'
        
        $this->set(compact('posts','post'));
    }
}
?>