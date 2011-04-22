<?php
/* Song Test cases generated on: 2011-04-22 10:46:33 : 1303433193*/
App::import('Model', 'Song');

class SongTestCase extends CakeTestCase {
	var $fixtures = array('app.song', 'app.artist', 'app.performance');

	function startTest() {
		$this->Song =& ClassRegistry::init('Song');
	}

	function endTest() {
		unset($this->Song);
		ClassRegistry::flush();
	}

}
