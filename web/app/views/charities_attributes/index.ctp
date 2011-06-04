<div class="charitiesAttributes index">
	<h2><?php __('Charities Attributes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('charity_id');?></th>
			<th><?php echo $this->Paginator->sort('attribute_id');?></th>
			<th><?php echo $this->Paginator->sort('attributevalue_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($charitiesAttributes as $charitiesAttribute):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $charitiesAttribute['CharitiesAttribute']['charity_id']; ?>&nbsp;</td>
		<td><?php echo $charitiesAttribute['CharitiesAttribute']['attribute_id']; ?>&nbsp;</td>
		<td><?php echo $charitiesAttribute['CharitiesAttribute']['attributevalue_id']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $charitiesAttribute['CharitiesAttribute']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $charitiesAttribute['CharitiesAttribute']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $charitiesAttribute['CharitiesAttribute']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $charitiesAttribute['CharitiesAttribute']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Charities Attribute', true), array('action' => 'add')); ?></li>
	</ul>
</div>