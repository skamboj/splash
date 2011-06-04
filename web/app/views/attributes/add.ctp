<div class="attributes form">
<?php echo $this->Form->create('Attribute');?>
	<fieldset>
		<legend><?php __('Add Attribute'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('Charity');
		echo $this->Form->input('User');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Attributes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Attributevalues', true), array('controller' => 'attributevalues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attributevalue', true), array('controller' => 'attributevalues', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Charities', true), array('controller' => 'charities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Charity', true), array('controller' => 'charities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>