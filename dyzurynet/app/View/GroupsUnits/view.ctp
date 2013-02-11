<div class="groupsUnits view">
<h2><?php  echo __('Groups Unit'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($groupsUnit['GroupsUnit']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($groupsUnit['Group']['name'], array('controller' => 'groups', 'action' => 'view', $groupsUnit['Group']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit'); ?></dt>
		<dd>
			<?php echo $this->Html->link($groupsUnit['Unit']['name'], array('controller' => 'units', 'action' => 'view', $groupsUnit['Unit']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Groups Unit'), array('action' => 'edit', $groupsUnit['GroupsUnit']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Groups Unit'), array('action' => 'delete', $groupsUnit['GroupsUnit']['id']), null, __('Are you sure you want to delete # %s?', $groupsUnit['GroupsUnit']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups Units'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Groups Unit'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Units'), array('controller' => 'units', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unit'), array('controller' => 'units', 'action' => 'add')); ?> </li>
	</ul>
</div>
