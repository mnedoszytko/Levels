<div class="positions view">
<h2><?php  echo __('Position'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($position['Position']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($position['Position']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Schedule'); ?></dt>
		<dd>
			<?php echo $this->Html->link($position['Schedule']['name'], array('controller' => 'schedules', 'action' => 'view', $position['Schedule']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Index'); ?></dt>
		<dd>
			<?php echo h($position['Position']['index']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($position['Position']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($position['Position']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Position'), array('action' => 'edit', $position['Position']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Position'), array('action' => 'delete', $position['Position']['id']), null, __('Are you sure you want to delete # %s?', $position['Position']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Positions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schedules'), array('controller' => 'schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schedule'), array('controller' => 'schedules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Workhours'), array('controller' => 'workhours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Workhour'), array('controller' => 'workhours', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Workhours'); ?></h3>
	<?php if (!empty($position['Workhour'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Position Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Start'); ?></th>
		<th><?php echo __('End'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($position['Workhour'] as $workhour): ?>
		<tr>
			<td><?php echo $workhour['id']; ?></td>
			<td><?php echo $workhour['name']; ?></td>
			<td><?php echo $workhour['position_id']; ?></td>
			<td><?php echo $workhour['user_id']; ?></td>
			<td><?php echo $workhour['start']; ?></td>
			<td><?php echo $workhour['end']; ?></td>
			<td><?php echo $workhour['created']; ?></td>
			<td><?php echo $workhour['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'workhours', 'action' => 'view', $workhour['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'workhours', 'action' => 'edit', $workhour['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'workhours', 'action' => 'delete', $workhour['id']), null, __('Are you sure you want to delete # %s?', $workhour['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Workhour'), array('controller' => 'workhours', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
