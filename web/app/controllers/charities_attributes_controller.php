<?php
class CharitiesAttributesController extends AppController {

	var $name = 'CharitiesAttributes';

	function index() {
		$this->CharitiesAttribute->recursive = 0;
		$this->set('charitiesAttributes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid charities attribute', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('charitiesAttribute', $this->CharitiesAttribute->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->CharitiesAttribute->create();
			if ($this->CharitiesAttribute->save($this->data)) {
				$this->Session->setFlash(__('The charities attribute has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The charities attribute could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid charities attribute', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CharitiesAttribute->save($this->data)) {
				$this->Session->setFlash(__('The charities attribute has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The charities attribute could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CharitiesAttribute->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for charities attribute', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CharitiesAttribute->delete($id)) {
			$this->Session->setFlash(__('Charities attribute deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Charities attribute was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>