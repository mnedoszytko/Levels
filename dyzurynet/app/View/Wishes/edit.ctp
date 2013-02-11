<div class="wishes form">
<?php echo $this->Form->create('Wish'); ?>
	<fieldset>
		<legend><?php echo __('Edit Wish'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('wishmode_id');
		echo $this->Form->input('schedule_id');
		echo $this->Form->input('start');
		echo $this->Form->input('end');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Wish.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Wish.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Wishes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wishmodes'), array('controller' => 'wishmodes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wishmode'), array('controller' => 'wishmodes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Schedules'), array('controller' => 'schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schedule'), array('controller' => 'schedules', 'action' => 'add')); ?> </li>
	</ul>
</div>
