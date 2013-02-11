<?php
App::uses('AppController', 'Controller');
/**
 * UnitsUsers Controller
 *
 * @property UnitsUser $UnitsUser
 */
class UnitsUsersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->UnitsUser->recursive = 0;
		$this->set('unitsUsers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->UnitsUser->id = $id;
		if (!$this->UnitsUser->exists()) {
			throw new NotFoundException(__('Invalid units user'));
		}
		$this->set('unitsUser', $this->UnitsUser->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UnitsUser->create();
			if ($this->UnitsUser->save($this->request->data)) {
				$this->Session->setFlash(__('The units user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The units user could not be saved. Please, try again.'));
			}
		}
		$units = $this->UnitsUser->Unit->find('list');
		$users = $this->UnitsUser->User->find('list');
		$this->set(compact('units', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->UnitsUser->id = $id;
		if (!$this->UnitsUser->exists()) {
			throw new NotFoundException(__('Invalid units user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->UnitsUser->save($this->request->data)) {
				$this->Session->setFlash(__('The units user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The units user could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->UnitsUser->read(null, $id);
		}
		$units = $this->UnitsUser->Unit->find('list');
		$users = $this->UnitsUser->User->find('list');
		$this->set(compact('units', 'users'));
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
		$this->UnitsUser->id = $id;
		if (!$this->UnitsUser->exists()) {
			throw new NotFoundException(__('Invalid units user'));
		}
		if ($this->UnitsUser->delete()) {
			$this->Session->setFlash(__('Units user deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Units user was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
