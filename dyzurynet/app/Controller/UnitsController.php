<?php
App::uses('AppController', 'Controller');
/**
 * Units Controller
 *
 * @property Unit $Unit
 */
class UnitsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Unit->recursive = 0;
		$this->set('units', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Unit->id = $id;
		if (!$this->Unit->exists()) {
			throw new NotFoundException(__('Invalid unit'));
		}
		$this->set('unit', $this->Unit->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Unit->create();
			if ($this->Unit->save($this->request->data)) {
				$this->Session->setFlash(__('The unit has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The unit could not be saved. Please, try again.'));
			}
		}
		$institutions = $this->Unit->Institution->find('list');
		$groups = $this->Unit->Group->find('list');
		$users = $this->Unit->User->find('list');
		$this->set(compact('institutions', 'groups', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Unit->id = $id;
		if (!$this->Unit->exists()) {
			throw new NotFoundException(__('Invalid unit'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Unit->save($this->request->data)) {
				$this->Session->setFlash(__('The unit has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The unit could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Unit->read(null, $id);
		}
		$institutions = $this->Unit->Institution->find('list');
		$groups = $this->Unit->Group->find('list');
		$users = $this->Unit->User->find('list');
		$this->set(compact('institutions', 'groups', 'users'));
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
		$this->Unit->id = $id;
		if (!$this->Unit->exists()) {
			throw new NotFoundException(__('Invalid unit'));
		}
		if ($this->Unit->delete()) {
			$this->Session->setFlash(__('Unit deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Unit was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
