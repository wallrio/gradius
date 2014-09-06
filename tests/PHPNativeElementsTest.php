<?php 

use PHPUnit_Framework_TestCase as PHPUnit;
use Application\NativeElements\Math;


class PHPNativeElementsTest extends PHPUnit{
	
	protected $math;
	
	public function SetUp(){
		$this->math = new Math;
	}
	
	public function tearDown(){
		
	}
	
	public function testOperacaoMatematica(){
		$this->assertEquals(3,$this->math->sum(1,2),'não somou corretamente.');
	}
}