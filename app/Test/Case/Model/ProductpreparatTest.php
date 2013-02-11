<?php
App::uses('Productpreparat', 'Model');

/**
 * Productpreparat Test Case
 *
 */
class ProductpreparatTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.productpreparat',
		'app.product',
		'app.preparat',
		'app.order'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Productpreparat = ClassRegistry::init('Productpreparat');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Productpreparat);

		parent::tearDown();
	}

}
