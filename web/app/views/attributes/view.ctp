<div class="attributes view">
<h2><?php  __('Attribute');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $attribute['Attribute']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $attribute['Attribute']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Attribute', true), array('action' => 'edit', $attribute['Attribute']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Attribute', true), array('action' => 'delete', $attribute['Attribute']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $attribute['Attribute']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Attributes', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attribute', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attributevalues', true), array('controller' => 'attributevalues', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attributevalue', true), array('controller' => 'attributevalues', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Charities', true), array('controller' => 'charities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Charity', true), array('controller' => 'charities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Attributevalues');?></h3>
	<?php if (!empty($attribute['Attributevalue'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Attribute Id'); ?></th>
		<th><?php __('Value'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($attribute['Attributevalue'] as $attributevalue):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $attributevalue['id'];?></td>
			<td><?php echo $attributevalue['attribute_id'];?></td>
			<td><?php echo $attributevalue['value'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'attributevalues', 'action' => 'view', $attributevalue['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'attributevalues', 'action' => 'edit', $attributevalue['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'attributevalues', 'action' => 'delete', $attributevalue['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $attributevalue['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Attributevalue', true), array('controller' => 'attributevalues', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Charities');?></h3>
	<?php if (!empty($attribute['Charity'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Address'); ?></th>
		<th><?php __('Url'); ?></th>
		<th><?php __('Email'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($attribute['Charity'] as $charity):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $charity['id'];?></td>
			<td><?php echo $charity['name'];?></td>
			<td><?php echo $charity['address'];?></td>
			<td><?php echo $charity['url'];?></td>
			<td><?php echo $charity['email'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'charities', 'action' => 'view', $charity['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'charities', 'action' => 'edit', $charity['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'charities', 'action' => 'delete', $charity['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $charity['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Charity', true), array('controller' => 'charities', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Users');?></h3>
	<?php if (!empty($attribute['User'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Fb Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($attribute['User'] as $user):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $user['id'];?></td>
			<td><?php echo $user['fb_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'users', 'action' => 'delete', $user['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
