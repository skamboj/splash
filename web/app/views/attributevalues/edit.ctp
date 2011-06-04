<div class="attributevalues form">
<?php echo $this->Form->create('Attributevalue');?>
	<fieldset>
		<legend><?php __('Edit Attributevalue'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('attribute_id');
		echo $this->Form->input('value');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Attributevalue.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Attributevalue.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Attributevalues', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Attributes', true), array('controller' => 'attributes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attribute', true), array('controller' => 'attributes', 'action' => 'add')); ?> </li>
	</ul>
</div>