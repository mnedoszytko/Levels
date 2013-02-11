<div class="unitsUsers view">
<h2><?php  echo __('Units User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($unitsUser['UnitsUser']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit'); ?></dt>
		<dd>
			<?php echo $this->Html->link($unitsUser['Unit']['name'], array('controller' => 'units', 'action' => 'view', $unitsUser['Unit']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($unitsUser['User']['name'], array('controller' => 'users', 'action' => 'view', $unitsUser['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Units User'), array('action' => 'edit', $unitsUser['UnitsUser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Units User'), array('action' => 'delete', $unitsUser['UnitsUser']['id']), null, __('Are you sure you want to delete # %s?', $unitsUser['UnitsUser']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Units Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Units User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Units'), array('controller' => 'units', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unit'), array('controller' => 'units', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
