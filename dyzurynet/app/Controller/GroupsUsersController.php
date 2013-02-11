<?php
App::uses('AppController', 'Controller');
/**
 * GroupsUsers Controller
 *
 * @property GroupsUser $GroupsUser
 */
class GroupsUsersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->GroupsUser->recursive = 0;
		$this->set('groupsUsers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->GroupsUser->id = $id;
		if (!$this->GroupsUser->exists()) {
			throw new NotFoundException(__('Invalid groups user'));
		}
		$this->set('groupsUser', $this->GroupsUser->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GroupsUser->create();
			if ($this->GroupsUser->save($this->request->data)) {
				$this->Session->setFlash(__('The groups user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The groups user could not be saved. Please, try again.'));
			}
		}
		$groups = $this->GroupsUser->Group->find('list');
		$users = $this->GroupsUser->User->find('list');
		$this->set(compact('groups', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->GroupsUser->id = $id;
		if (!$this->GroupsUser->exists()) {
			throw new NotFoundException(__('Invalid groups user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->GroupsUser->save($this->request->data)) {
				$this->Session->setFlash(__('The groups user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The groups user could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->GroupsUser->read(null, $id);
		}
		$groups = $this->GroupsUser->Group->find('list');
		$users = $this->GroupsUser->User->find('list');
		$this->set(compact('groups', 'users'));
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
		$this->GroupsUser->id = $id;
		if (!$this->GroupsUser->exists()) {
			throw new NotFoundException(__('Invalid groups user'));
		}
		if ($this->GroupsUser->delete()) {
			$this->Session->setFlash(__('Groups user deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Groups user was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
