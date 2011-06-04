<div class="attributevalues form">
<?php echo $this->Form->create('Attributevalue');?>
	<fieldset>
		<legend><?php __('Add Attributevalue'); ?></legend>
	<?php
		echo $this->Form->input('attribute_id');
		echo $this->Form->input('value');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Attributevalues', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Attributes', true), array('controller' => 'attributes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attribute', true), array('controller' => 'attributes', 'action' => 'add')); ?> </li>
	</ul>
</div>