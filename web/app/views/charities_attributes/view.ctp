<div class="charitiesAttributes view">
<h2><?php  __('Charities Attribute');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Charity Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $charitiesAttribute['CharitiesAttribute']['charity_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Attribute Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $charitiesAttribute['CharitiesAttribute']['attribute_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Attributevalue Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $charitiesAttribute['CharitiesAttribute']['attributevalue_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Charities Attribute', true), array('action' => 'edit', $charitiesAttribute['CharitiesAttribute']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Charities Attribute', true), array('action' => 'delete', $charitiesAttribute['CharitiesAttribute']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $charitiesAttribute['CharitiesAttribute']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Charities Attributes', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Charities Attribute', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
