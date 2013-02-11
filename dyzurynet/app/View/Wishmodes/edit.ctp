<div class="wishmodes form">
<?php echo $this->Form->create('Wishmode'); ?>
	<fieldset>
		<legend><?php echo __('Edit Wishmode'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('rgb');
		echo $this->Form->input('name');
		echo $this->Form->input('schedule_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Wishmode.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Wishmode.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Wishmodes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Schedules'), array('controller' => 'schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schedule'), array('controller' => 'schedules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wishes'), array('controller' => 'wishes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wish'), array('controller' => 'wishes', 'action' => 'add')); ?> </li>
	</ul>
</div>
