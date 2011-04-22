<?php
/* Artist Test cases generated on: 2011-04-22 10:44:35 : 1303433075*/
App::import('Model', 'Artist');

class ArtistTestCase extends CakeTestCase {
	var $fixtures = array('app.artist', 'app.song');

	function startTest() {
		$this->Artist =& ClassRegistry::init('Artist');
	}

	function endTest() {
		unset($this->Artist);
		ClassRegistry::flush();
	}

}
