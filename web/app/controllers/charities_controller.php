<?php
class CharitiesController extends AppController {

	var $name = 'Charities';

	function index() {
		$this->Charity->recursive = 0;
		$this->set('charities', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid charity', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('charity', $this->Charity->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Charity->create();
			if ($this->Charity->save($this->data)) {
				$this->Session->setFlash(__('The charity has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The charity could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Charity->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid charity', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Charity->save($this->data)) {
				$this->Session->setFlash(__('The charity has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The charity could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Charity->read(null, $id);
		}
		$users = $this->Charity->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for charity', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Charity->delete($id)) {
			$this->Session->setFlash(__('Charity deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Charity was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>