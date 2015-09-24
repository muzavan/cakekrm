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
	public $components = array('Paginator','RequestHandler');

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
				//$this->Flash->set('The kategori has been saved.');
				$this->Session->setFlash(__('New kategori saved.'),'Flash'.DS.'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('New kategori can\'t be saved. Please try again'),'Flash'.DS.'error');
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
				//$this->Flash->success(__('The kategori has been saved.'));
				$this->Session->setFlash(__('The kategori has been saved.'),'Flash'.DS.'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The kategori could not be saved. Please, try again.'),'Flash'.DS.'error');
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
			$this->Session->setFlash(__('Kategori has been deleted.'),'Flash'.DS.'success');
		} else {
			$this->Session->setFlash(__('Kategori can\'t be deleted.'),'Flash'.DS.'success');
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Kategori->recursive = 0;
		$this->set('kategoris', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Kategori->exists($id)) {
			throw new NotFoundException(__('Invalid kategori'));
		}
		$options = array('conditions' => array('Kategori.' . $this->Kategori->primaryKey => $id));
		$this->set('kategori', $this->Kategori->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Kategori->create();
			if ($this->Kategori->save($this->request->data)) {
				//$this->Flash->success(__('The kategori has been saved.'));
				$this->Session->setFlash(__('The kategori has been saved.'),'Flash'.DS.'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				//$this->Flash->error(__('The kategori could not be saved. Please, try again.'));
				$this->Session->setFlash(__('The kategori could not be saved.'),'Flash'.DS.'error');
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Kategori->exists($id)) {
			throw new NotFoundException(__('Invalid kategori'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Kategori->save($this->request->data)) {
				//$this->Flash->success(__('The kategori has been saved.'));
				$this->Session->setFlash(__('The kategori has been saved.'),'Flash'.DS.'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The kategori could not be saved. Please, try again.'),'Flash'.DS.'error');
				//$this->Flash->error(__('The kategori could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Kategori.' . $this->Kategori->primaryKey => $id));
			$this->request->data = $this->Kategori->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Kategori->id = $id;
		if (!$this->Kategori->exists()) {
			throw new NotFoundException(__('Invalid kategori'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Kategori->delete()) {
			//$this->Flash->success(__('The kategori has been deleted.'));
			$this->Session->setFlash(__('The kategori has been deleted.'),'Flash'.DS.'success');
		} else {
			//$this->Flash->error(__('The kategori could not be deleted. Please, try again.'));
			$this->Session->setFlash(__('The kategori could not be deleted.'),'Flash'.DS.'error');
		}
		return $this->redirect(array('action' => 'index'));
	}
}
