<div class="workhours view">
<h2><?php  echo __('Workhour'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($workhour['Workhour']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($workhour['Workhour']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position'); ?></dt>
		<dd>
			<?php echo $this->Html->link($workhour['Position']['name'], array('controller' => 'positions', 'action' => 'view', $workhour['Position']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($workhour['User']['name'], array('controller' => 'users', 'action' => 'view', $workhour['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start'); ?></dt>
		<dd>
			<?php echo h($workhour['Workhour']['start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End'); ?></dt>
		<dd>
			<?php echo h($workhour['Workhour']['end']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($workhour['Workhour']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($workhour['Workhour']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Workhour'), array('action' => 'edit', $workhour['Workhour']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Workhour'), array('action' => 'delete', $workhour['Workhour']['id']), null, __('Are you sure you want to delete # %s?', $workhour['Workhour']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Workhours'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Workhour'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Positions'), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position'), array('controller' => 'positions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
