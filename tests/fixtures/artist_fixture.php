<?php
/* Artist Fixture generated on: 2011-04-22 10:44:35 : 1303433075 */
class ArtistFixture extends CakeTestFixture {
	var $name = 'Artist';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => '4db0cf73-7b6c-4642-a7e1-1fbd2d8494b6',
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => '2011-04-22 10:44:35',
			'modified' => '2011-04-22 10:44:35'
		),
	);
}
