<div class="positions form">
<?php echo $this->Form->create('Position'); ?>
	<fieldset>
		<legend><?php echo __('Add Position'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('schedule_id');
		echo $this->Form->input('index');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Positions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Schedules'), array('controller' => 'schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Schedule'), array('controller' => 'schedules', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Workhours'), array('controller' => 'workhours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Workhour'), array('controller' => 'workhours', 'action' => 'add')); ?> </li>
	</ul>
</div>
