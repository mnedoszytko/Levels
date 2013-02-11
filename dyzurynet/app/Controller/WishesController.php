<?php
App::uses('AppController', 'Controller');
/**
 * Wishes Controller
 *
 * @property Wish $Wish
 */
class WishesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Wish->recursive = 0;
		$this->set('wishes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Wish->id = $id;
		if (!$this->Wish->exists()) {
			throw new NotFoundException(__('Invalid wish'));
		}
		$this->set('wish', $this->Wish->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Wish->create();
			if ($this->Wish->save($this->request->data)) {
				$this->Session->setFlash(__('The wish has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wish could not be saved. Please, try again.'));
			}
		}
		$users = $this->Wish->User->find('list');
		$wishmodes = $this->Wish->Wishmode->find('list');
		$schedules = $this->Wish->Schedule->find('list');
		$this->set(compact('users', 'wishmodes', 'schedules'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Wish->id = $id;
		if (!$this->Wish->exists()) {
			throw new NotFoundException(__('Invalid wish'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Wish->save($this->request->data)) {
				$this->Session->setFlash(__('The wish has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The wish could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Wish->read(null, $id);
		}
		$users = $this->Wish->User->find('list');
		$wishmodes = $this->Wish->Wishmode->find('list');
		$schedules = $this->Wish->Schedule->find('list');
		$this->set(compact('users', 'wishmodes', 'schedules'));
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
		$this->Wish->id = $id;
		if (!$this->Wish->exists()) {
			throw new NotFoundException(__('Invalid wish'));
		}
		if ($this->Wish->delete()) {
			$this->Session->setFlash(__('Wish deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Wish was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
