<?php
/* Songs Test cases generated on: 2011-04-22 10:46:33 : 1303433193*/
App::import('Controller', 'Songs');

class TestSongsController extends SongsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SongsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.song', 'app.artist', 'app.performance');

	function startTest() {
		$this->Songs =& new TestSongsController();
		$this->Songs->constructClasses();
	}

	function endTest() {
		unset($this->Songs);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
