<?php

interface RomanNumeralGenerator
{
    public function generate($number);
}

class Numerals implements RomanNumeralGenerator 
{
	public function generate($number) 
	{
		// The kata stipulations include that the number must be more than zero and less than 4000
		// so we first check that that is the case
		if (!is_int($number) || $number <= 0 || $number >= 4000) 
		{
			return null;
		}
		
		$numerals = array(
			1000 		=> 	'M',
			900 		=> 	'CM',
			500		=>	'D',
			400		=>	'CD',
			100		=>	'C',
			90		=>	'XC',
			50		=>	'L',
			40		=>	'XL',
			10		=>	'X',
			9		=>	'IX',
			5		=>	'V',
			4		=>	'IV',
			1		=>	'I'
		);
	
		$result = "";
	
		foreach ($numerals as $key => $value) {
		    	while ($number >= $key) {
       		 		$result .= $value;
       		 		$number = $number - $key;
 			}
		}

		return $result;
	}
}

?>
