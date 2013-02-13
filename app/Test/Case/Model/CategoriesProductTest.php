<?php
App::uses('CategoriesProduct', 'Model');

/**
 * CategoriesProduct Test Case
 *
 */
class CategoriesProductTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.categories_product',
		'app.category',
		'app.CategoriesProduct',
		'app.product',
		'app.analog',
		'app.preparat',
		'app.ProductsPreparat'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CategoriesProduct = ClassRegistry::init('CategoriesProduct');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CategoriesProduct);

		parent::tearDown();
	}

}
