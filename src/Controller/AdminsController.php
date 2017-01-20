<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Admins Controller
 *
 * @property \App\Model\Table\AdminsTable $Admins
 */
class AdminsController extends AppController
{
    public function initialize(){
        $this->loadComponent('Flash');
        //$this->loadModel('admins');
        $this->loadComponent('Auth',[
                    'authenticate'=>[
                        'Form'=>['userModel'=>'admins',
                            'fields'=>[
                            'username'=>'email',
                            'password'=>'password'
                            ]
                        ]
                    ],
                    'loginAction'=>[
                        'controller'=>'Admins',
                        'action'=>'login'
                    ],
                    'loginRedirect'=>[
                        'controller'=>'Admins',
                        'action'=>'index'
                    ]
            ]);
    }
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->viewBuilder()->layout('adminLayout');
    }
    public function home()
    {
        $this->viewBuilder()->layout('adminLayout');
        $admins = $this->paginate($this->Admins);

        $this->set(compact('admins'));
        $this->set('_serialize', ['admins']);
        
    }
    /**
     * View method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {   
        $this->viewBuilder()->layout('adminLayout');
        $admin = $this->Admins->get($id, [
            'contain' => []
        ]);

        $this->set('admin', $admin);
        $this->set('_serialize', ['admin']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->layout('adminLayout');
        $admin = $this->Admins->newEntity();
        if ($this->request->is('post')) {
            $this->request->data['phone']=(int)$this->request->data['phone'];
            $admin = $this->Admins->patchEntity($admin, $this->request->data);
            if ($this->Admins->save($admin)) {
                $this->Flash->success(__('The admin has been saved.'));

                return $this->redirect(['action' => 'home']);
            } else {
                $this->Flash->error(__('The admin could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('admin'));
        $this->set('_serialize', ['admin']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->layout('adminLayout');
        $admin = $this->Admins->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $admin = $this->Admins->patchEntity($admin, $this->request->data);
            if ($this->Admins->save($admin)) {
                $this->Flash->success(__('The admin has been saved.'));

                return $this->redirect(['action' => 'home']);
            } else {
                $this->Flash->error(__('The admin could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('admin'));
        $this->set('_serialize', ['admin']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {   $this->viewBuilder()->layout('adminLayout');
        $this->request->allowMethod(['post', 'delete']);
        $admin = $this->Admins->get($id);
        if ($this->Admins->delete($admin)) {
            $this->Flash->success(__('The admin has been deleted.'));
        } else {
            $this->Flash->error(__('The admin could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'home']);
    }

    public function login(){
        if($this->request->is('post')){
            $this->loadModel('admins');
            $user=$this->Auth->identify();
            if($user){
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Incorrect Username or password');
        }
    }
    public function logout(){
        $this->Flash->success('You are now logged out');
        return $this->redirect($this->Auth->logout());
    }
}
