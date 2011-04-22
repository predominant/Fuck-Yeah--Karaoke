<div class="artists view">
<h2><?php  __('Artist');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $artist['Artist']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $artist['Artist']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $artist['Artist']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $artist['Artist']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Artist', true), array('action' => 'edit', $artist['Artist']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Artist', true), array('action' => 'delete', $artist['Artist']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $artist['Artist']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Artists', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artist', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Songs', true), array('controller' => 'songs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Song', true), array('controller' => 'songs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Songs');?></h3>
	<?php if (!empty($artist['Song'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Artist Id'); ?></th>
		<th><?php __('Play Count'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($artist['Song'] as $song):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $song['id'];?></td>
			<td><?php echo $song['name'];?></td>
			<td><?php echo $song['artist_id'];?></td>
			<td><?php echo $song['play_count'];?></td>
			<td><?php echo $song['created'];?></td>
			<td><?php echo $song['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'songs', 'action' => 'view', $song['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'songs', 'action' => 'edit', $song['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'songs', 'action' => 'delete', $song['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $song['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Song', true), array('controller' => 'songs', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
