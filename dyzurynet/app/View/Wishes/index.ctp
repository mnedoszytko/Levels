<div class="wishes index">
	<h2><?php echo __('Wishes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('wishmode_id'); ?></th>
			<th><?php echo $this->Paginator->sort('schedule_id'); ?></th>
			<th><?php echo $this->Paginator->sort('start'); ?></th>
			<th><?php echo $this->Paginator->sort('end'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($wishes as $wish): ?>
	<tr>
		<td><?php echo h($wish['Wish']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($wish['User']['name'], array('controller' => 'users', 'action' => 'view', $wish['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($wish['Wishmode']['name'], array('controller' => 'wishmodes', 'action' => 'view', $wish['Wishmode']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($wish['Schedule']['name'], array('controller' => 'schedules', 'action' => 'view', $wish['Schedule']['id'])); ?>
		</td>
		<td><?php echo h($wish['Wish']['start']); ?>&nbsp;</td>
		<td><?php echo h($wish['Wish']['end']); ?>&nbsp;</td>
		<td><?php echo h($wish['Wish']['created']); ?>&nbsp;</td>
		<td><?php echo h($wish['Wish']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $wish['Wish']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $wish['Wish']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $wish['Wish']['id']), null, __('Are you sure you want to delete # %s?', $wish['Wish']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Wish'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wishmodes'), array('controller' => 'wishmodes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wishmode'), array('controller' => 'wishmodes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schedules'), array('controller' => 'schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schedule'), array('controller' => 'schedules', 'action' => 'add')); ?> </li>
	</ul>
</div>
