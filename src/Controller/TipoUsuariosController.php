<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * TipoUsuarios Controller
 *
 * @property \App\Model\Table\TipoUsuariosTable $TipoUsuarios
 * @method \App\Model\Entity\TipoUsuario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TipoUsuariosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $tipoUsuarios = $this->paginate($this->TipoUsuarios);

        $this->set(compact('tipoUsuarios'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipo Usuario id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipoUsuario = $this->TipoUsuarios->get($id, [
            'contain' => ['Usuarios'],
        ]);

        $this->set(compact('tipoUsuario'));
    }

    /**
     * Adicionar method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipoUsuario = $this->TipoUsuarios->newEmptyEntity();
        if ($this->request->is('post')) {
            $tipoUsuario = $this->TipoUsuarios->patchEntity($tipoUsuario, $this->request->getData());
            if ($this->TipoUsuarios->save($tipoUsuario)) {
                $this->Flash->success(__('The tipo usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipo usuario could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoUsuario'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipo Usuario id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipoUsuario = $this->TipoUsuarios->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipoUsuario = $this->TipoUsuarios->patchEntity($tipoUsuario, $this->request->getData());
            if ($this->TipoUsuarios->save($tipoUsuario)) {
                $this->Flash->success(__('The tipo usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipo usuario could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoUsuario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipo Usuario id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipoUsuario = $this->TipoUsuarios->get($id);
        if ($this->TipoUsuarios->delete($tipoUsuario)) {
            $this->Flash->success(__('The tipo usuario has been deleted.'));
        } else {
            $this->Flash->error(__('The tipo usuario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
