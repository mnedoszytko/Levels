<?php
App::uses('AppController', 'Controller');
/**
 * GroupsUnits Controller
 *
 * @property GroupsUnit $GroupsUnit
 */
class GroupsUnitsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->GroupsUnit->recursive = 0;
		$this->set('groupsUnits', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->GroupsUnit->id = $id;
		if (!$this->GroupsUnit->exists()) {
			throw new NotFoundException(__('Invalid groups unit'));
		}
		$this->set('groupsUnit', $this->GroupsUnit->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GroupsUnit->create();
			if ($this->GroupsUnit->save($this->request->data)) {
				$this->Session->setFlash(__('The groups unit has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The groups unit could not be saved. Please, try again.'));
			}
		}
		$groups = $this->GroupsUnit->Group->find('list');
		$units = $this->GroupsUnit->Unit->find('list');
		$this->set(compact('groups', 'units'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->GroupsUnit->id = $id;
		if (!$this->GroupsUnit->exists()) {
			throw new NotFoundException(__('Invalid groups unit'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->GroupsUnit->save($this->request->data)) {
				$this->Session->setFlash(__('The groups unit has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The groups unit could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->GroupsUnit->read(null, $id);
		}
		$groups = $this->GroupsUnit->Group->find('list');
		$units = $this->GroupsUnit->Unit->find('list');
		$this->set(compact('groups', 'units'));
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
		$this->GroupsUnit->id = $id;
		if (!$this->GroupsUnit->exists()) {
			throw new NotFoundException(__('Invalid groups unit'));
		}
		if ($this->GroupsUnit->delete()) {
			$this->Session->setFlash(__('Groups unit deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Groups unit was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
