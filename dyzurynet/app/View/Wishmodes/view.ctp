<div class="wishmodes view">
<h2><?php  echo __('Wishmode'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($wishmode['Wishmode']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rgb'); ?></dt>
		<dd>
			<?php echo h($wishmode['Wishmode']['rgb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($wishmode['Wishmode']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Schedule'); ?></dt>
		<dd>
			<?php echo $this->Html->link($wishmode['Schedule']['name'], array('controller' => 'schedules', 'action' => 'view', $wishmode['Schedule']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($wishmode['Wishmode']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($wishmode['Wishmode']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Wishmode'), array('action' => 'edit', $wishmode['Wishmode']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Wishmode'), array('action' => 'delete', $wishmode['Wishmode']['id']), null, __('Are you sure you want to delete # %s?', $wishmode['Wishmode']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Wishmodes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wishmode'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schedules'), array('controller' => 'schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schedule'), array('controller' => 'schedules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wishes'), array('controller' => 'wishes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wish'), array('controller' => 'wishes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Wishes'); ?></h3>
	<?php if (!empty($wishmode['Wish'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Wishmode Id'); ?></th>
		<th><?php echo __('Schedule Id'); ?></th>
		<th><?php echo __('Start'); ?></th>
		<th><?php echo __('End'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($wishmode['Wish'] as $wish): ?>
		<tr>
			<td><?php echo $wish['id']; ?></td>
			<td><?php echo $wish['user_id']; ?></td>
			<td><?php echo $wish['wishmode_id']; ?></td>
			<td><?php echo $wish['schedule_id']; ?></td>
			<td><?php echo $wish['start']; ?></td>
			<td><?php echo $wish['end']; ?></td>
			<td><?php echo $wish['created']; ?></td>
			<td><?php echo $wish['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'wishes', 'action' => 'view', $wish['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'wishes', 'action' => 'edit', $wish['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'wishes', 'action' => 'delete', $wish['id']), null, __('Are you sure you want to delete # %s?', $wish['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Wish'), array('controller' => 'wishes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
