<div class="absences view">
<h2><?php  echo __('Absence'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($absence['Absence']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit'); ?></dt>
		<dd>
			<?php echo $this->Html->link($absence['Unit']['name'], array('controller' => 'units', 'action' => 'view', $absence['Unit']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($absence['User']['name'], array('controller' => 'users', 'action' => 'view', $absence['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start'); ?></dt>
		<dd>
			<?php echo h($absence['Absence']['start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End'); ?></dt>
		<dd>
			<?php echo h($absence['Absence']['end']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($absence['Absence']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($absence['Absence']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Absence'), array('action' => 'edit', $absence['Absence']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Absence'), array('action' => 'delete', $absence['Absence']['id']), null, __('Are you sure you want to delete # %s?', $absence['Absence']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Absences'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Absence'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Units'), array('controller' => 'units', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unit'), array('controller' => 'units', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
