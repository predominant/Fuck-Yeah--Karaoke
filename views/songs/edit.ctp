<div class="songs form">
<?php echo $this->Form->create('Song');?>
	<fieldset>
		<legend><?php __('Edit Song'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('artist_id');
		echo $this->Form->input('play_count');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Song.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Song.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Songs', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Artists', true), array('controller' => 'artists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Artist', true), array('controller' => 'artists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Performances', true), array('controller' => 'performances', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Performance', true), array('controller' => 'performances', 'action' => 'add')); ?> </li>
	</ul>
</div>