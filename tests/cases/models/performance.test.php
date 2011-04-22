<?php
/* Performance Test cases generated on: 2011-04-22 10:46:43 : 1303433203*/
App::import('Model', 'Performance');

class PerformanceTestCase extends CakeTestCase {
	var $fixtures = array('app.performance', 'app.user', 'app.song', 'app.artist');

	function startTest() {
		$this->Performance =& ClassRegistry::init('Performance');
	}

	function endTest() {
		unset($this->Performance);
		ClassRegistry::flush();
	}

}
