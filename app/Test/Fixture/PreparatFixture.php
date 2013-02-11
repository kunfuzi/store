<?php
/**
 * PreparatFixture
 *
 */
class PreparatFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'codeall' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'code' => array('type' => 'string', 'null' => false, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'codepart' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'namec' => array('type' => 'string', 'null' => false, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'seria' => array('type' => 'string', 'null' => false, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ost' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '10,2'),
		'zakaz' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '10,2'),
		'cenaopt' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '10,2'),
		'cenaoptm' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '10,2'),
		'cenaoptk' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '10,2'),
		'cenarozn' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '10,2'),
		'summa' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '10,2'),
		'cenands' => array('type' => 'float', 'null' => false, 'default' => '0.00', 'length' => '10,2'),
		'zavod' => array('type' => 'string', 'null' => false, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nds' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'reestr' => array('type' => 'string', 'null' => false, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nac' => array('type' => 'string', 'null' => false, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'godnost' => array('type' => 'date', 'null' => false, 'default' => '0000-00-00'),
		'tiprozn' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 1),
		'narkn' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'd_post' => array('type' => 'date', 'null' => false, 'default' => '0000-00-00'),
		'uid' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'ID' => array('column' => 'id', 'unique' => 0),
			'namec' => array('column' => 'namec', 'unique' => 0),
			'uid' => array('column' => 'uid', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);;

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'codeall' => 1,
			'code' => 'Lorem ipsum dolor sit amet',
			'codepart' => 1,
			'namec' => 'Lorem ipsum dolor sit amet',
			'seria' => 'Lorem ipsum dolor sit amet',
			'ost' => 1,
			'zakaz' => 1,
			'cenaopt' => 1,
			'cenaoptm' => 1,
			'cenaoptk' => 1,
			'cenarozn' => 1,
			'summa' => 1,
			'cenands' => 1,
			'zavod' => 'Lorem ipsum dolor sit amet',
			'nds' => 1,
			'reestr' => 'Lorem ipsum dolor sit amet',
			'nac' => 'Lorem ipsum dolor sit amet',
			'godnost' => '2013-02-10',
			'tiprozn' => 1,
			'narkn' => 1,
			'd_post' => '2013-02-10',
			'uid' => 1
		),
	);

}
