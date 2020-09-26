<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Routers Controller
 *
 * @property \App\Model\Table\RoutersTable $Routers
 * @method \App\Model\Entity\Router[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RoutersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $routers = $this->paginate($this->Routers);

        //$this->set(compact('routers'));
        $this->set([
            'routers'=>$routers,
            '_serialize'=>['routers']
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Router id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $router = $this->Routers->get($id, [
            'contain' => [],
        ]);

        //$this->set(compact('router'));
        $this->set([
            'router'=>$router,
            '_serialize'=>['router']
        ]);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $router = $this->Routers->newEmptyEntity();
        if ($this->request->is('post')) {
            $router = $this->Routers->patchEntity($router, $this->request->getData());
            if ($this->Routers->save($router)) {
                $this->Flash->success(__('The router has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The router could not be saved. Please, try again.'));
        }
        //$this->set(compact('router'));
        $this->set([
            'router'=>$router,
            '_serialize'=>['router']
        ]);
    }

    /**
     * Edit method
     *
     * @param string|null $id Router id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $router = $this->Routers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $router = $this->Routers->patchEntity($router, $this->request->getData());
            if ($this->Routers->save($router)) {
                $this->Flash->success(__('The router has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The router could not be saved. Please, try again.'));
        }
        //$this->set(compact('router'));
        $this->set([
            'router'=>$router,
            '_serialize'=>['router']
        ]);
    }

    /**
     * Delete method
     *
     * @param string|null $id Router id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $router = $this->Routers->get($id);
        if ($this->Routers->delete($router)) {
            $this->Flash->success(__('The router has been deleted.'));
        } else {
            $msg='The router could not be deleted. Please, try again.';
            $this->Flash->error(__('The router could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
        $this->set([            
            'msg'=>$msg,
            '_serialize'=>['msg']
        ]);
    }
}
