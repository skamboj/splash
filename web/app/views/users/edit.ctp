<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fb_id');
		echo $this->Form->input('Attribute');
		echo $this->Form->input('Charity');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('User.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Attributes', true), array('controller' => 'attributes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attribute', true), array('controller' => 'attributes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Charities', true), array('controller' => 'charities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Charity', true), array('controller' => 'charities', 'action' => 'add')); ?> </li>
	</ul>
</div>