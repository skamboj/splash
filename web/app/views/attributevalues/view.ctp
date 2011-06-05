<div class="attributevalues view">
<h2><?php  __('Attributevalue');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $attributevalue['Attributevalue']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Attribute'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($attributevalue['Attribute']['name'], array('controller' => 'attributes', 'action' => 'view', $attributevalue['Attribute']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Value'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $attributevalue['Attributevalue']['value']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Attributevalue', true), array('action' => 'edit', $attributevalue['Attributevalue']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Attributevalue', true), array('action' => 'delete', $attributevalue['Attributevalue']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $attributevalue['Attributevalue']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Attributevalues', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attributevalue', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attributes', true), array('controller' => 'attributes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attribute', true), array('controller' => 'attributes', 'action' => 'add')); ?> </li>
	</ul>
</div>
