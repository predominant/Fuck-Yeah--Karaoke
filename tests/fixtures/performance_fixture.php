<?php
/* Performance Fixture generated on: 2011-04-22 10:46:43 : 1303433203 */
class PerformanceFixture extends CakeTestFixture {
	var $name = 'Performance';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'user_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'song_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'status' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => '4db0cff3-aed4-4624-b9ed-20552d8494b6',
			'user_id' => 'Lorem ipsum dolor sit amet',
			'song_id' => 'Lorem ipsum dolor sit amet',
			'status' => 1,
			'created' => '2011-04-22 10:46:43',
			'modified' => '2011-04-22 10:46:43'
		),
	);
}
