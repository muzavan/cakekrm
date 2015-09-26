<?php
App::uses('AppController', 'Controller');
/**
 * Kategoris Controller
 *
 * @property Kategori $Kategori
 * @property PaginatorComponent $Paginator
 */
class KategorisController extends AppController {

/**
 * Components
 *
 * @var array
 */
	//public $components = array('Paginator','RequestHandler');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Kategori->recursive = 0;
		$this->set('kategoris', $this->Paginator->paginate());
	}

	public function api(){
		$this->layout = false;
		$this->set('kategoris',$this->Kategori->find('all'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Kategori->exists($id)) {
			throw new NotFoundException(__('Invalid kategori'));
		}
		$options = array('conditions' => array('Kategori.' . $this->Kategori->primaryKey => $id));
		$this->set('kategori', $this->Kategori->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Kategori->create();
			if ($this->Kategori->save($this->request->data)) {
				$this->Flash->success(__('The kategori has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The kategori could not be saved.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Kategori->exists($id)) {
			throw new NotFoundException(__('Invalid kategori'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Kategori->save($this->request->data)) {
				$this->Flash->success(__('The kategori has been saved.'));
				//$this->Session->setFlash(__('The kategori has been saved.'),'Flash'.DS.'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The kategori could not be saved.'));
				//$this->Session->setFlash(__('The kategori could not be saved. Please, try again.'),'Flash'.DS.'error');
			}
		} else {
			$options = array('conditions' => array('Kategori.' . $this->Kategori->primaryKey => $id));
			$this->request->data = $this->Kategori->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Kategori->id = $id;
		if (!$this->Kategori->exists()) {
			throw new NotFoundException(__('Invalid kategori'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Kategori->delete()) {
			$this->Flash->success(__('Kategori has been deleted.'));
		} else {
			$this->Flash->error(__('Kategori can\'t be deleted.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function export() {
		Router::parseExtensions('csv');
		$this->response->download("kategoris.csv");
		$data = $this->Kategori->find('all');
		$this->set(compact('data'));
		$this->layout = 'ajax';
		return;
	}

}