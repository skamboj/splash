<?php
class AttributevaluesController extends AppController {

	var $name = 'Attributevalues';

	function index() {
		$this->Attributevalue->recursive = 0;
		$this->set('attributevalues', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid attributevalue', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('attributevalue', $this->Attributevalue->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Attributevalue->create();
			if ($this->Attributevalue->save($this->data)) {
				$this->Session->setFlash(__('The attributevalue has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attributevalue could not be saved. Please, try again.', true));
			}
		}
		$attributes = $this->Attributevalue->Attribute->find('list');
		$this->set(compact('attributes'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid attributevalue', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Attributevalue->save($this->data)) {
				$this->Session->setFlash(__('The attributevalue has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attributevalue could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Attributevalue->read(null, $id);
		}
		$attributes = $this->Attributevalue->Attribute->find('list');
		$this->set(compact('attributes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for attributevalue', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Attributevalue->delete($id)) {
			$this->Session->setFlash(__('Attributevalue deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Attributevalue was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>