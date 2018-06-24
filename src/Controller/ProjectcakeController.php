<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projectcake Controller
 *
 * @property \App\Model\Table\ProjectcakeTable $Projectcake
 *
 * @method \App\Model\Entity\Projectcake[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjectcakeController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $projectcake = $this->paginate($this->Projectcake);

        $this->set(compact('projectcake'));
    }

    /**
     * View method
     *
     * @param string|null $id Projectcake id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projectcake = $this->Projectcake->get($id, [
            'contain' => []
        ]);

        $this->set('projectcake', $projectcake);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projectcake = $this->Projectcake->newEntity();
        if ($this->request->is('post')) {
            $projectcake = $this->Projectcake->patchEntity($projectcake, $this->request->getData());
            if ($this->Projectcake->save($projectcake)) {
                $this->Flash->success(__('The projectcake has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projectcake could not be saved. Please, try again.'));
        }
        $this->set(compact('projectcake'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projectcake id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projectcake = $this->Projectcake->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projectcake = $this->Projectcake->patchEntity($projectcake, $this->request->getData());
            if ($this->Projectcake->save($projectcake)) {
                $this->Flash->success(__('The projectcake has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projectcake could not be saved. Please, try again.'));
        }
        $this->set(compact('projectcake'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projectcake id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projectcake = $this->Projectcake->get($id);
        if ($this->Projectcake->delete($projectcake)) {
            $this->Flash->success(__('The projectcake has been deleted.'));
        } else {
            $this->Flash->error(__('The projectcake could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
