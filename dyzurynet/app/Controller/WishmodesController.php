<?php
App::uses('AppController', 'Controller');
/**
 * Wishmodes Controller
 *
 * @property Wishmode $Wishmode
 */
class WishmodesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Wishmode->recursive = 0;
		$this->set('wishmodes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Wishmode->id = $id;
		if (!$this->Wishmode->exists()) {
			throw new NotFoundException(__('Invalid wishmode'));
		}
		$this->set('wishmode', $this->Wishmode->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Wishmode->create();
			if ($this->Wishmode->save($this->request->data)) {
				$this->Session->setFlash(__('The wishmode has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wishmode could not be saved. Please, try again.'));
			}
		}
		$schedules = $this->Wishmode->Schedule->find('list');
		$this->set(compact('schedules'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Wishmode->id = $id;
		if (!$this->Wishmode->exists()) {
			throw new NotFoundException(__('Invalid wishmode'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Wishmode->save($this->request->data)) {
				$this->Session->setFlash(__('The wishmode has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wishmode could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Wishmode->read(null, $id);
		}
		$schedules = $this->Wishmode->Schedule->find('list');
		$this->set(compact('schedules'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Wishmode->id = $id;
		if (!$this->Wishmode->exists()) {
			throw new NotFoundException(__('Invalid wishmode'));
		}
		if ($this->Wishmode->delete()) {
			$this->Session->setFlash(__('Wishmode deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Wishmode was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
