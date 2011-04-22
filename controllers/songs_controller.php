<?php
class SongsController extends AppController {

	var $name = 'Songs';

	function index() {
		$this->Song->recursive = 0;
		$this->set('songs', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid song', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('song', $this->Song->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Song->create();
			if ($this->Song->save($this->data)) {
				$this->Session->setFlash(__('The song has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The song could not be saved. Please, try again.', true));
			}
		}
		$artists = $this->Song->Artist->find('list');
		$this->set(compact('artists'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid song', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Song->save($this->data)) {
				$this->Session->setFlash(__('The song has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The song could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Song->read(null, $id);
		}
		$artists = $this->Song->Artist->find('list');
		$this->set(compact('artists'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for song', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Song->delete($id)) {
			$this->Session->setFlash(__('Song deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Song was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
