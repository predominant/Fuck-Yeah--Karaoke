<?php
echo $this->Form->create(null, array('' => 'Login'));

	echo $this->Form->inputs(array(
		'username', 'password'
	));

echo $this->Form->end('Login');
?>