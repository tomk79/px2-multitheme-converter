<?php
/**
 * test
 */

class mainTest extends PHPUnit_Framework_TestCase{

	/**
	 * File system utility
	 */
	private $fs;

	/**
	 * setup
	 */
	public function setup(){
		$this->fs = new \tomk79\filesystem();
	}

	/**
	 * インスタンス化
	 */
	public function testMain(){

		$mtConv = new \tomk79\pickles2\multithemeConverter\main();

		$this->assertTrue( is_object($mtConv) );

	} // testMain()

}
