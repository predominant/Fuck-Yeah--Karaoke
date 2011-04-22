<?php
class ArtistsController extends AppController {

	var $name = 'Artists';

	function index() {
		$this->Artist->recursive = 0;
		$this->set('artists', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid artist', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('artist', $this->Artist->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Artist->create();
			if ($this->Artist->save($this->data)) {
				$this->Session->setFlash(__('The artist has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The artist could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid artist', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Artist->save($this->data)) {
				$this->Session->setFlash(__('The artist has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The artist could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Artist->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for artist', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Artist->delete($id)) {
			$this->Session->setFlash(__('Artist deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Artist was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
