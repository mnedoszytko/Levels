<?php
App::uses('AppController', 'Controller');
/**
 * Absences Controller
 *
 * @property Absence $Absence
 */
class AbsencesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Absence->recursive = 0;
		$this->set('absences', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Absence->id = $id;
		if (!$this->Absence->exists()) {
			throw new NotFoundException(__('Invalid absence'));
		}
		$this->set('absence', $this->Absence->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Absence->create();
			if ($this->Absence->save($this->request->data)) {
				$this->Session->setFlash(__('The absence has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The absence could not be saved. Please, try again.'));
			}
		}
		$units = $this->Absence->Unit->find('list');
		$users = $this->Absence->User->find('list');
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
		$this->Absence->id = $id;
		if (!$this->Absence->exists()) {
			throw new NotFoundException(__('Invalid absence'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Absence->save($this->request->data)) {
				$this->Session->setFlash(__('The absence has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The absence could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Absence->read(null, $id);
		}
		$units = $this->Absence->Unit->find('list');
		$users = $this->Absence->User->find('list');
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
		$this->Absence->id = $id;
		if (!$this->Absence->exists()) {
			throw new NotFoundException(__('Invalid absence'));
		}
		if ($this->Absence->delete()) {
			$this->Session->setFlash(__('Absence deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Absence was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
