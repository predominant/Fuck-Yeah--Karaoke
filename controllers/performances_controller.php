<?php
class PerformancesController extends AppController {

	var $name = 'Performances';

	function index() {
		$this->Performance->recursive = 0;
		$this->set('performances', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid performance', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('performance', $this->Performance->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Performance->create();
			if ($this->Performance->save($this->data)) {
				$this->Session->setFlash(__('The performance has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The performance could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Performance->User->find('list');
		$songs = $this->Performance->Song->find('list');
		$this->set(compact('users', 'songs'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid performance', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Performance->save($this->data)) {
				$this->Session->setFlash(__('The performance has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The performance could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Performance->read(null, $id);
		}
		$users = $this->Performance->User->find('list');
		$songs = $this->Performance->Song->find('list');
		$this->set(compact('users', 'songs'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for performance', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Performance->delete($id)) {
			$this->Session->setFlash(__('Performance deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Performance was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
