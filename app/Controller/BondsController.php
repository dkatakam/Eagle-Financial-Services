<?php
App::uses('AppController', 'Controller');
/**
 * Bonds Controller
 *
 * @property Bond $Bond
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class BondsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Bond->recursive = 0;
		$this->set('bonds', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Bond->exists($id)) {
			throw new NotFoundException(__('Invalid bond'));
		}
		$options = array('conditions' => array('Bond.' . $this->Bond->primaryKey => $id));
		$this->set('bond', $this->Bond->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Bond->create();
			if ($this->Bond->save($this->request->data)) {
				$this->Flash->success(__('The bond has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The bond could not be saved. Please, try again.'));
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
		if (!$this->Bond->exists($id)) {
			throw new NotFoundException(__('Invalid bond'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Bond->save($this->request->data)) {
				$this->Flash->success(__('The bond has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The bond could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Bond.' . $this->Bond->primaryKey => $id));
			$this->request->data = $this->Bond->find('first', $options);
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
		$this->Bond->id = $id;
		if (!$this->Bond->exists()) {
			throw new NotFoundException(__('Invalid bond'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Bond->delete()) {
			$this->Flash->success(__('The bond has been deleted.'));
		} else {
			$this->Flash->error(__('The bond could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
