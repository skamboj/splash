<div class="attributevalues index">
	<h2><?php __('Attributevalues');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('attribute_id');?></th>
			<th><?php echo $this->Paginator->sort('value');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($attributevalues as $attributevalue):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $attributevalue['Attributevalue']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($attributevalue['Attribute']['name'], array('controller' => 'attributes', 'action' => 'view', $attributevalue['Attribute']['id'])); ?>
		</td>
		<td><?php echo $attributevalue['Attributevalue']['value']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $attributevalue['Attributevalue']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $attributevalue['Attributevalue']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $attributevalue['Attributevalue']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $attributevalue['Attributevalue']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Attributevalue', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Attributes', true), array('controller' => 'attributes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attribute', true), array('controller' => 'attributes', 'action' => 'add')); ?> </li>
	</ul>
</div>