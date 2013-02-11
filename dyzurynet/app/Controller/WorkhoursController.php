<?php
App::uses('AppController', 'Controller');
/**
 * Workhours Controller
 *
 * @property Workhour $Workhour
 */
class WorkhoursController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Workhour->recursive = 0;
		$this->set('workhours', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Workhour->id = $id;
		if (!$this->Workhour->exists()) {
			throw new NotFoundException(__('Invalid workhour'));
		}
		$this->set('workhour', $this->Workhour->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Workhour->create();
			if ($this->Workhour->save($this->request->data)) {
				$this->Session->setFlash(__('The workhour has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The workhour could not be saved. Please, try again.'));
			}
		}
		$positions = $this->Workhour->Position->find('list');
		$users = $this->Workhour->User->find('list');
		$this->set(compact('positions', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Workhour->id = $id;
		if (!$this->Workhour->exists()) {
			throw new NotFoundException(__('Invalid workhour'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Workhour->save($this->request->data)) {
				$this->Session->setFlash(__('The workhour has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The workhour could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Workhour->read(null, $id);
		}
		$positions = $this->Workhour->Position->find('list');
		$users = $this->Workhour->User->find('list');
		$this->set(compact('positions', 'users'));
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
		$this->Workhour->id = $id;
		if (!$this->Workhour->exists()) {
			throw new NotFoundException(__('Invalid workhour'));
		}
		if ($this->Workhour->delete()) {
			$this->Session->setFlash(__('Workhour deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Workhour was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
