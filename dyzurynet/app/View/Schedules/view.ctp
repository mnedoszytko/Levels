<div class="schedules view">
<h2><?php  echo __('Schedule'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($schedule['Schedule']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($schedule['Schedule']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit'); ?></dt>
		<dd>
			<?php echo $this->Html->link($schedule['Unit']['name'], array('controller' => 'units', 'action' => 'view', $schedule['Unit']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($schedule['Schedule']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($schedule['Schedule']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Schedule'), array('action' => 'edit', $schedule['Schedule']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Schedule'), array('action' => 'delete', $schedule['Schedule']['id']), null, __('Are you sure you want to delete # %s?', $schedule['Schedule']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Schedules'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schedule'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Units'), array('controller' => 'units', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unit'), array('controller' => 'units', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Positions'), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position'), array('controller' => 'positions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wishes'), array('controller' => 'wishes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wish'), array('controller' => 'wishes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wishmodes'), array('controller' => 'wishmodes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wishmode'), array('controller' => 'wishmodes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Positions'); ?></h3>
	<?php if (!empty($schedule['Position'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Schedule Id'); ?></th>
		<th><?php echo __('Index'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($schedule['Position'] as $position): ?>
		<tr>
			<td><?php echo $position['id']; ?></td>
			<td><?php echo $position['name']; ?></td>
			<td><?php echo $position['schedule_id']; ?></td>
			<td><?php echo $position['index']; ?></td>
			<td><?php echo $position['created']; ?></td>
			<td><?php echo $position['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'positions', 'action' => 'view', $position['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'positions', 'action' => 'edit', $position['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'positions', 'action' => 'delete', $position['id']), null, __('Are you sure you want to delete # %s?', $position['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Position'), array('controller' => 'positions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Wishes'); ?></h3>
	<?php if (!empty($schedule['Wish'])): ?>
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
		foreach ($schedule['Wish'] as $wish): ?>
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
<div class="related">
	<h3><?php echo __('Related Wishmodes'); ?></h3>
	<?php if (!empty($schedule['Wishmode'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Rgb'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Schedule Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($schedule['Wishmode'] as $wishmode): ?>
		<tr>
			<td><?php echo $wishmode['id']; ?></td>
			<td><?php echo $wishmode['rgb']; ?></td>
			<td><?php echo $wishmode['name']; ?></td>
			<td><?php echo $wishmode['schedule_id']; ?></td>
			<td><?php echo $wishmode['created']; ?></td>
			<td><?php echo $wishmode['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'wishmodes', 'action' => 'view', $wishmode['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'wishmodes', 'action' => 'edit', $wishmode['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'wishmodes', 'action' => 'delete', $wishmode['id']), null, __('Are you sure you want to delete # %s?', $wishmode['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Wishmode'), array('controller' => 'wishmodes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
