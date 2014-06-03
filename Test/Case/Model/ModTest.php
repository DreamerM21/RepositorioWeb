<?php
App::uses('Mod', 'Model');

/**
 * Mod Test Case
 *
 */
class ModTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mod',
		'app.entrada',
		'app.user',
		'app.val_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Mod = ClassRegistry::init('Mod');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mod);

		parent::tearDown();
	}

}
