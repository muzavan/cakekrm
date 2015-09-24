<?php
App::uses('AppController', 'Controller');
/**
 * Hmjs Controller
 *
 * @property Hmj $Hmj
 * @property PaginatorComponent $Paginator
 */
class HmjsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','RequestHandler');
	public $uses = array('Kategori','Hmj');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Hmj->recursive = 0;
		$this->set('hmjs', $this->Hmj->find('all'));
	}

	public function api(){
		$this->layout = false;
		$kategori = [];
		foreach($this->Kategori->find('all') as $kateg){
			$kategori[$kateg['Kategori']['id']] = $kateg['Kategori']['link_gambar']; 
		}
		$hmjs = $this->Hmj->find('all');
		$all = [];
		foreach($hmjs as $hmj){
			$id = $hmj['Hmj']['id'];
			$all[$id] = $hmj['Hmj'];
			$all[$id]['link_gambar'] = $kategori[$hmj['Hmj']['kategori']];
		}
		$this->set('hmjs',$all);
	}

	public function all(){
		$this->layout = false;
		$kategori = [];
		foreach($this->Kategori->find('all') as $kateg){
			$kategori[] = $kateg['Kategori']; 
		}
		$this->set('kategoris',$kategori);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Hmj->exists($id)) {
			throw new NotFoundException(__('Invalid hmj'));
		}
		$options = array('conditions' => array('Hmj.' . $this->Hmj->primaryKey => $id));
		$this->set('hmj', $this->Hmj->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Hmj->create();
			if ($this->Hmj->save($this->request->data)) {
				$this->Flash->success(__('The hmj has been saved.'));
				//$this->Session->setFlash(__('The hmj has been saved.'),'Flash'.DS.'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The hmj could not be saved. Please, try again.'));
				//$this->Session->setFlash(__('The hmj could not saved.'),'Flash'.DS.'error');
			}
		}
		$hmjs = $this->Hmj->find('list');
		$this->set(compact('hmjs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Hmj->exists($id)) {
			throw new NotFoundException(__('Invalid hmj'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Hmj->save($this->request->data)) {
				$this->Flash->success(__('The hmj has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				//$this->Session->setFlash(__('The hmj could not be saved.'),'Flash'.DS.'error');
				$this->Flash->error(__('The hmj could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Hmj.' . $this->Hmj->primaryKey => $id));
			$this->request->data = $this->Hmj->find('first', $options);
		}
		$hmjs = $this->Hmj->find('list');
		$this->set(compact('hmjs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Hmj->id = $id;
		if (!$this->Hmj->exists()) {
			throw new NotFoundException(__('Invalid hmj'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Hmj->delete()) {
			$this->Flash->success(__('The hmj has been deleted.'));
			//$this->Session->setFlash(__('The hmj has been deleted.'),'Flash'.DS.'success');
		} else {
			//$this->Session->setFlash(__('The hmj could not be saved.'),'Flash'.DS.'error');
			$this->Flash->error(__('The hmj could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

}
