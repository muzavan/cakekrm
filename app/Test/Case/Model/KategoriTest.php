<?php
App::uses('Kategori', 'Model');

/**
 * Kategori Test Case
 */
class KategoriTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.kategori'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Kategori = ClassRegistry::init('Kategori');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Kategori);

		parent::tearDown();
	}

}
