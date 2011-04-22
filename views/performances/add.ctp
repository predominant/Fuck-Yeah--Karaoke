<div class="performances form">
<?php echo $this->Form->create('Performance');?>
	<fieldset>
		<legend><?php __('Add Performance'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('song_id');
		echo $this->Form->input('status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Performances', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Songs', true), array('controller' => 'songs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Song', true), array('controller' => 'songs', 'action' => 'add')); ?> </li>
	</ul>
</div>