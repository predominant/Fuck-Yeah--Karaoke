<div class="artists form">
<?php echo $this->Form->create('Artist');?>
	<fieldset>
		<legend><?php __('Add Artist'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Artists', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Songs', true), array('controller' => 'songs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Song', true), array('controller' => 'songs', 'action' => 'add')); ?> </li>
	</ul>
</div>