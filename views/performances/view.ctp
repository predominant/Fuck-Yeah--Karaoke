<div class="performances view">
<h2><?php  __('Performance');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $performance['Performance']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($performance['User']['name'], array('controller' => 'users', 'action' => 'view', $performance['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Song'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($performance['Song']['name'], array('controller' => 'songs', 'action' => 'view', $performance['Song']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $performance['Performance']['status']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $performance['Performance']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $performance['Performance']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Performance', true), array('action' => 'edit', $performance['Performance']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Performance', true), array('action' => 'delete', $performance['Performance']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $performance['Performance']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Performances', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Performance', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Songs', true), array('controller' => 'songs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Song', true), array('controller' => 'songs', 'action' => 'add')); ?> </li>
	</ul>
</div>
