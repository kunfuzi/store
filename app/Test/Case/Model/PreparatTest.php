<?php
App::uses('Preparat', 'Model');

/**
 * Preparat Test Case
 *
 */
class PreparatTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		$this->Preparat = ClassRegistry::init('Preparat');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Preparat);

		parent::tearDown();
	}

}
