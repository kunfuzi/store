<?php
/**
 * CategoriesProductFixture
 *
 */
class CategoriesProductFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'category_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'product_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'category_id' => array('column' => array('category_id', 'product_id'), 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'cp1251', 'collate' => 'cp1251_general_ci', 'engine' => 'MyISAM')
	);;

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'category_id' => 1,
			'product_id' => 1
		),
	);

}
