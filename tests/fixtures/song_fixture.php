<?php
/* Song Fixture generated on: 2011-04-22 10:46:33 : 1303433193 */
class SongFixture extends CakeTestFixture {
	var $name = 'Song';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'artist_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'play_count' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => '4db0cfe9-6bc0-4146-8acc-204e2d8494b6',
			'name' => 'Lorem ipsum dolor sit amet',
			'artist_id' => 'Lorem ipsum dolor sit amet',
			'play_count' => 1,
			'created' => '2011-04-22 10:46:33',
			'modified' => '2011-04-22 10:46:33'
		),
	);
}
