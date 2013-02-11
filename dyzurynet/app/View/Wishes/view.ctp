<div class="wishes view">
<h2><?php  echo __('Wish'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($wish['Wish']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($wish['User']['name'], array('controller' => 'users', 'action' => 'view', $wish['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wishmode'); ?></dt>
		<dd>
			<?php echo $this->Html->link($wish['Wishmode']['name'], array('controller' => 'wishmodes', 'action' => 'view', $wish['Wishmode']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Schedule'); ?></dt>
		<dd>
			<?php echo $this->Html->link($wish['Schedule']['name'], array('controller' => 'schedules', 'action' => 'view', $wish['Schedule']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start'); ?></dt>
		<dd>
			<?php echo h($wish['Wish']['start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End'); ?></dt>
		<dd>
			<?php echo h($wish['Wish']['end']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($wish['Wish']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($wish['Wish']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Wish'), array('action' => 'edit', $wish['Wish']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Wish'), array('action' => 'delete', $wish['Wish']['id']), null, __('Are you sure you want to delete # %s?', $wish['Wish']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Wishes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wish'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wishmodes'), array('controller' => 'wishmodes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wishmode'), array('controller' => 'wishmodes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schedules'), array('controller' => 'schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schedule'), array('controller' => 'schedules', 'action' => 'add')); ?> </li>
	</ul>
</div>
