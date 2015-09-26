<?php
App::uses('AppController', 'Controller');
/**
 * Komunitas Controller
 *
 * @property Komunita $Komunita
 * @property PaginatorComponent $Paginator
 */
class KomunitasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $uses = array('Komunita','Kategori');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Komunita->recursive = 0;
		$this->set('komunitas', $this->Paginator->paginate());
		$kategori = array();
		foreach($this->Kategori->find('all') as $kateg){
			$kategori[] = $kateg['Kategori']; 
		}
		$this->set('kategoris',$kategori);
	}

	public function api(){
		$this->layout = false;
		$kategori = array();
		foreach($this->Kategori->find('all') as $kateg){
			$kategori[$kateg['Kategori']['id']] = $kateg['Kategori']['link_gambar']; 
		}
		$komunitas = $this->Komunita->find('all');
		$all = array();
		foreach($komunitas as $komunita){
			$id = $komunita['Komunita']['id'];
			$all[$id] = $komunita['Komunita'];
			$all[$id]['link_gambar'] = $kategori[$komunita['Komunita']['kategori']];
		}
		$this->set('komunitas',$all);
	}

	public function all(){
		$this->layout = false;
		$kategori = array();
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
		if (!$this->Komunita->exists($id)) {
			throw new NotFoundException(__('Invalid komunita'));
		}
		$options = array('conditions' => array('Komunita.' . $this->Komunita->primaryKey => $id));
		$this->set('komunita', $this->Komunita->find('first', $options));
		$kategori = array();
		foreach($this->Kategori->find('all') as $kateg){
			$kategori[] = $kateg['Kategori']; 
		}
		$this->set('kategoris',$kategori);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Komunita->create();
			if ($this->Komunita->save($this->request->data)) {
				$this->Flash->success(__('The komunita has been saved.'));
				//$this->Session->setFlash(__('Komunitas has been saved.'),'Flash'.DS.'success');
				return $this->redirect(array('action' => 'index'));
			} else {
				//$this->Session->setFlash(__('Komunitas could not saved.'),'Flash'.DS.'error');
				$this->Flash->error(__('The komunita could not be saved. Please, try again.'));
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
		if (!$this->Komunita->exists($id)) {
			throw new NotFoundException(__('Invalid komunita'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Komunita->save($this->request->data)) {
				//$this->Session->setFlash(__('Komunitas has been saved.'),'Flash'.DS.'success');
				$this->Flash->success(__('The komunita has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The komunita could not be saved. Please, try again.'));
				//$this->Session->setFlash(__('Komunitas could not be saved.'),'Flash'.DS.'error');
			}
		} else {
			$options = array('conditions' => array('Komunita.' . $this->Komunita->primaryKey => $id));
			$this->request->data = $this->Komunita->find('first', $options);
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
		$this->Komunita->id = $id;
		if (!$this->Komunita->exists()) {
			throw new NotFoundException(__('Invalid komunita'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Komunita->delete()) {
			$this->Flash->success(__('The komunita has been deleted.'));
			//$this->Session->setFlash(__('Komunitas has been deleted.'),'Flash'.DS.'success');
		} else {
			$this->Flash->error(__('The komunita could not be deleted. Please, try again.'));
			//$this->Session->setFlash(__('Komunitas could not be saved.'),'Flash'.DS.'error');
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function export() {
		Router::parseExtensions('csv');
		$this->response->download("komunitas.csv");
		$data = $this->Komunita->find('all');
		$this->set(compact('data'));
		$this->layout = 'ajax';
		return;
	}

	public function search($keyword = null){
		$this->layout = 'ajax';
		$hsl = $this->Komunita->find('all',array(
			'conditions' => array(
				'OR' => array(
					'Komunita.nama_lembaga like ' => "%".$keyword."%",
					'Komunita.deskripsi_lembaga like ' => "%".$keyword."%",
					'Komunita.alamat like ' => "%".$keyword."%",
					),

			),
		));
		$this->set('komunitas',$hsl);
	}

}