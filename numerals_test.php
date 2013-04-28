<?php

require_once "PHPUnit/Autoload.php";
require_once "numerals.php";

class NumeralsTest extends PHPUnit_Framework_TestCase 
{

	protected $generator;

	protected function setUp()
	{
		$this->generator = new Numerals();
	}

	public function testCheckInvalidInputs()
	{
		$this->assertEquals('', $this->generator->generate(0));	
		$this->assertEquals('', $this->generator->generate(4000));
		$this->assertEquals('', $this->generator->generate('thousand'));
		$this->assertEquals('', $this->generator->generate(3.5));
	}

	public function testValues()
	{
		$testValues = array(
			1	=>	'I',
			4	=>	'IV',
			9	=>	'IX',
			30	=>	'XXX',
			40	=>	'XL',
			90	=>	'XC',
			400	=>	'CD',
			2013	=>	'MMXIII',
			3999	=>	'MMMCMXCIX'
		);

		foreach ($testValues as $input => $output) {
			$this->assertEquals($output, $this->generator->generate($input));
		}
	}
}
