<div class="schedules form">
<?php echo $this->Form->create('Schedule'); ?>
	<fieldset>
		<legend><?php echo __('Add Schedule'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('unit_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Schedules'), array('action' => 'index')); ?></li>
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
