<?php
App::uses('Bond', 'Model');

/**
 * Bond Test Case
 */
class BondTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.bond'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Bond = ClassRegistry::init('Bond');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Bond);

		parent::tearDown();
	}

}
