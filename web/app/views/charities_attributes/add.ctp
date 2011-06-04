<div class="charitiesAttributes form">
<?php echo $this->Form->create('CharitiesAttribute');?>
	<fieldset>
		<legend><?php __('Add Charities Attribute'); ?></legend>
	<?php
		echo $this->Form->input('charity_id');
		echo $this->Form->input('attribute_id');
		echo $this->Form->input('attributevalue_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Charities Attributes', true), array('action' => 'index'));?></li>
	</ul>
</div>