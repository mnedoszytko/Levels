<div class="unitsUsers form">
<?php echo $this->Form->create('UnitsUser'); ?>
	<fieldset>
		<legend><?php echo __('Edit Units User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('unit_id');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('UnitsUser.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('UnitsUser.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Units Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Units'), array('controller' => 'units', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unit'), array('controller' => 'units', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
