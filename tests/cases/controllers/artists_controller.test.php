<?php
/* Artists Test cases generated on: 2011-04-22 10:46:03 : 1303433163*/
App::import('Controller', 'Artists');

class TestArtistsController extends ArtistsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ArtistsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.artist', 'app.song');

	function startTest() {
		$this->Artists =& new TestArtistsController();
		$this->Artists->constructClasses();
	}

	function endTest() {
		unset($this->Artists);
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
