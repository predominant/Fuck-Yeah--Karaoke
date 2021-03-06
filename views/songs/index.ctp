<div class="songs index">
	<h2><?php __('Songs');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('artist_id');?></th>
			<th><?php echo $this->Paginator->sort('play_count');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($songs as $song):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $song['Song']['id']; ?>&nbsp;</td>
		<td><?php echo $song['Song']['name']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($song['Artist']['name'], array('controller' => 'artists', 'action' => 'view', $song['Artist']['id'])); ?>
		</td>
		<td><?php echo $song['Song']['play_count']; ?>&nbsp;</td>
		<td><?php echo $song['Song']['created']; ?>&nbsp;</td>
		<td><?php echo $song['Song']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $song['Song']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $song['Song']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $song['Song']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $song['Song']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Song', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Artists', true), array('controller' => 'artists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artist', true), array('controller' => 'artists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Performances', true), array('controller' => 'performances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Performance', true), array('controller' => 'performances', 'action' => 'add')); ?> </li>
	</ul>
</div>