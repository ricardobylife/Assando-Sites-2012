<?php
/**
 * PaymentGatewayFixture
 *
 */
class PaymentGatewayFixture extends CakeTestFixture {

/**
 * Import
 *
 * @var array
 */
	public $import = array('model' => 'PaymentGateway');

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'PagSeguro'
		),
		array(
			'id' => 2,
			'name' => 'Paypal'
		),
	);
}
