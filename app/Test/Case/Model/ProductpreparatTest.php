<?php
App::uses('ProductsPreparat', 'Model');

/**
 * ProductsPreparat Test Case
 *
 */
class ProductsPreparatTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ProductsPreparat',
		'app.product',
		'app.analog',
		'app.preparat',
		'app.CategoriesProduct',
		'app.category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProductsPreparat = ClassRegistry::init('ProductsPreparat');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductsPreparat);

		parent::tearDown();
	}

}
