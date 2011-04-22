<?php
/* Performances Test cases generated on: 2011-04-22 10:46:43 : 1303433203*/
App::import('Controller', 'Performances');

class TestPerformancesController extends PerformancesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PerformancesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.performance', 'app.user', 'app.song', 'app.artist');

	function startTest() {
		$this->Performances =& new TestPerformancesController();
		$this->Performances->constructClasses();
	}

	function endTest() {
		unset($this->Performances);
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
