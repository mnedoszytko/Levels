<?php
App::uses('Institution', 'Model');

/**
 * Institution Test Case
 *
 */
class InstitutionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.institution',
		'app.unit'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Institution = ClassRegistry::init('Institution');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Institution);

		parent::tearDown();
	}

}
