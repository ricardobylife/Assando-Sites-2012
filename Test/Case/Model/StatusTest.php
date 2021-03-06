<?php
App::uses('Status', 'Model');

/**
 * Status Test Case
 *
 */
class StatusTestCase extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Status = ClassRegistry::init('Status');
		$this->Status->useDbConfig = 'arrayDatasource';
	}

/**
 * Herdou de model?
 *
 * @return void
 */
	public function testModelObject() {
		$expected = 'Model';
		$result = $this->Status;

		$this->assertInstanceOf($expected, $result, 'Objeto não extendeu Model');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Status);

		parent::tearDown();
	}

}
