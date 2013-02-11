<div class="workhours index">
	<h2><?php echo __('Workhours'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('position_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('start'); ?></th>
			<th><?php echo $this->Paginator->sort('end'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($workhours as $workhour): ?>
	<tr>
		<td><?php echo h($workhour['Workhour']['id']); ?>&nbsp;</td>
		<td><?php echo h($workhour['Workhour']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($workhour['Position']['name'], array('controller' => 'positions', 'action' => 'view', $workhour['Position']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($workhour['User']['name'], array('controller' => 'users', 'action' => 'view', $workhour['User']['id'])); ?>
		</td>
		<td><?php echo h($workhour['Workhour']['start']); ?>&nbsp;</td>
		<td><?php echo h($workhour['Workhour']['end']); ?>&nbsp;</td>
		<td><?php echo h($workhour['Workhour']['created']); ?>&nbsp;</td>
		<td><?php echo h($workhour['Workhour']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $workhour['Workhour']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $workhour['Workhour']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $workhour['Workhour']['id']), null, __('Are you sure you want to delete # %s?', $workhour['Workhour']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Workhour'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Positions'), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position'), array('controller' => 'positions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
