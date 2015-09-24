<?php
App::uses('Komunita', 'Model');

/**
 * Komunita Test Case
 */
class KomunitaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.komunita'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Komunita = ClassRegistry::init('Komunita');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Komunita);

		parent::tearDown();
	}

}
