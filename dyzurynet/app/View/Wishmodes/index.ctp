<div class="wishmodes index">
	<h2><?php echo __('Wishmodes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('rgb'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('schedule_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($wishmodes as $wishmode): ?>
	<tr>
		<td><?php echo h($wishmode['Wishmode']['id']); ?>&nbsp;</td>
		<td><?php echo h($wishmode['Wishmode']['rgb']); ?>&nbsp;</td>
		<td><?php echo h($wishmode['Wishmode']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($wishmode['Schedule']['name'], array('controller' => 'schedules', 'action' => 'view', $wishmode['Schedule']['id'])); ?>
		</td>
		<td><?php echo h($wishmode['Wishmode']['created']); ?>&nbsp;</td>
		<td><?php echo h($wishmode['Wishmode']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $wishmode['Wishmode']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $wishmode['Wishmode']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $wishmode['Wishmode']['id']), null, __('Are you sure you want to delete # %s?', $wishmode['Wishmode']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Wishmode'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Schedules'), array('controller' => 'schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schedule'), array('controller' => 'schedules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wishes'), array('controller' => 'wishes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wish'), array('controller' => 'wishes', 'action' => 'add')); ?> </li>
	</ul>
</div>
