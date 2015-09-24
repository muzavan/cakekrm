<?php
App::uses('Hmj', 'Model');

/**
 * Hmj Test Case
 */
class HmjTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.hmj',
		'app.kategori'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Hmj = ClassRegistry::init('Hmj');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Hmj);

		parent::tearDown();
	}

}
