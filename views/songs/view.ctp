<div class="songs view">
<h2><?php  __('Song');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $song['Song']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $song['Song']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Artist'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($song['Artist']['name'], array('controller' => 'artists', 'action' => 'view', $song['Artist']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Play Count'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $song['Song']['play_count']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $song['Song']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $song['Song']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Song', true), array('action' => 'edit', $song['Song']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Song', true), array('action' => 'delete', $song['Song']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $song['Song']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Songs', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Song', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Artists', true), array('controller' => 'artists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artist', true), array('controller' => 'artists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Performances', true), array('controller' => 'performances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Performance', true), array('controller' => 'performances', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Performances');?></h3>
	<?php if (!empty($song['Performance'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Song Id'); ?></th>
		<th><?php __('Status'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($song['Performance'] as $performance):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $performance['id'];?></td>
			<td><?php echo $performance['user_id'];?></td>
			<td><?php echo $performance['song_id'];?></td>
			<td><?php echo $performance['status'];?></td>
			<td><?php echo $performance['created'];?></td>
			<td><?php echo $performance['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'performances', 'action' => 'view', $performance['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'performances', 'action' => 'edit', $performance['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'performances', 'action' => 'delete', $performance['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $performance['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Performance', true), array('controller' => 'performances', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
