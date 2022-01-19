<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Donations Controller
 *
 * @property \App\Model\Table\DonationsTable $Donations
 * @method \App\Model\Entity\Donation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DonationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Produtos', 'UsuarioPadarias', 'UsuarioFamilias', 'UsuarioInstituicaos'],
        ];
        $donations = $this->paginate($this->Donations);

        $this->set(compact('donations'));
    }

    /**
     * View method
     *
     * @param string|null $id Donation id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $donation = $this->Donations->get($id, [
            'contain' => ['Produtos', 'UsuarioPadarias', 'UsuarioFamilias', 'UsuarioInstituicaos'],
        ]);

        $this->set(compact('donation'));
    }

    /**
     * Adicionar method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $donation = $this->Donations->newEmptyEntity();
        if ($this->request->is('post')) {
            $donation = $this->Donations->patchEntity($donation, $this->request->getData());
            if ($this->Donations->save($donation)) {
                $this->Flash->success(__('The donation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The donation could not be saved. Please, try again.'));
        }
        $produtos = $this->Donations->Produtos->find('list', ['limit' => 200])->all();
        $usuarioPadarias = $this->Donations->UsuarioPadarias->find('list', ['limit' => 200])->all();
        $usuarioFamilias = $this->Donations->UsuarioFamilias->find('list', ['limit' => 200])->all();
        $usuarioInstituicaos = $this->Donations->UsuarioInstituicaos->find('list', ['limit' => 200])->all();
        $this->set(compact('donation', 'produtos', 'usuarioPadarias', 'usuarioFamilias', 'usuarioInstituicaos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Donation id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $donation = $this->Donations->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $donation = $this->Donations->patchEntity($donation, $this->request->getData());
            if ($this->Donations->save($donation)) {
                $this->Flash->success(__('The donation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The donation could not be saved. Please, try again.'));
        }
        $produtos = $this->Donations->Produtos->find('list', ['limit' => 200])->all();
        $usuarioPadarias = $this->Donations->UsuarioPadarias->find('list', ['limit' => 200])->all();
        $usuarioFamilias = $this->Donations->UsuarioFamilias->find('list', ['limit' => 200])->all();
        $usuarioInstituicaos = $this->Donations->UsuarioInstituicaos->find('list', ['limit' => 200])->all();
        $this->set(compact('donation', 'produtos', 'usuarioPadarias', 'usuarioFamilias', 'usuarioInstituicaos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Donation id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $donation = $this->Donations->get($id);
        if ($this->Donations->delete($donation)) {
            $this->Flash->success(__('The donation has been deleted.'));
        } else {
            $this->Flash->error(__('The donation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
