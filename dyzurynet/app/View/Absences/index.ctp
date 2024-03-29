<div class="absences index">
	<h2><?php echo __('Absences'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('unit_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('start'); ?></th>
			<th><?php echo $this->Paginator->sort('end'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($absences as $absence): ?>
	<tr>
		<td><?php echo h($absence['Absence']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($absence['Unit']['name'], array('controller' => 'units', 'action' => 'view', $absence['Unit']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($absence['User']['name'], array('controller' => 'users', 'action' => 'view', $absence['User']['id'])); ?>
		</td>
		<td><?php echo h($absence['Absence']['start']); ?>&nbsp;</td>
		<td><?php echo h($absence['Absence']['end']); ?>&nbsp;</td>
		<td><?php echo h($absence['Absence']['created']); ?>&nbsp;</td>
		<td><?php echo h($absence['Absence']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $absence['Absence']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $absence['Absence']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $absence['Absence']['id']), null, __('Are you sure you want to delete # %s?', $absence['Absence']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Absence'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Units'), array('controller' => 'units', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unit'), array('controller' => 'units', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
