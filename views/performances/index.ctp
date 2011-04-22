<div class="performances index">
	<h2><?php __('Performances');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('song_id');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($performances as $performance):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $performance['Performance']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($performance['User']['name'], array('controller' => 'users', 'action' => 'view', $performance['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($performance['Song']['name'], array('controller' => 'songs', 'action' => 'view', $performance['Song']['id'])); ?>
		</td>
		<td><?php echo $performance['Performance']['status']; ?>&nbsp;</td>
		<td><?php echo $performance['Performance']['created']; ?>&nbsp;</td>
		<td><?php echo $performance['Performance']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $performance['Performance']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $performance['Performance']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $performance['Performance']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $performance['Performance']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Performance', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Songs', true), array('controller' => 'songs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Song', true), array('controller' => 'songs', 'action' => 'add')); ?> </li>
	</ul>
</div>