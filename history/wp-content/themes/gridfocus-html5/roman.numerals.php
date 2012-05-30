<?php
/**
 *	@package WordPress
 *	@subpackage Grid_Focus
 */
 
 class RomanToDecimal { 
	private $roman = array("M","CM","D","CD","C","XC","L","XL","X","IX","V","IV","I");
	private $decimal = array(1000,900,500,400,100,90,50,40,10,9,5,4,1);
	public $romanNumeral = "";
	public $numThousands = 0;	
 
	function __construct() {}
 
	function ToRoman($value) {
		$this->romanNumeral = "";
		$this->numThousands = 0;	
		for ($i = 0; $i < count($this->roman); $i++) {
			if ($value == 0) break;
			while ($value >= $this->decimal[$i]) {
				$value -= $this->decimal[$i];
				$this->romanNumeral .= $this->roman[$i];
				if ($this->roman[$i] == 'M') $this->numThousands++;
			}
		}
		return;
	 }
}

 function decimalToRoman($value) {
	// 3,888,888 is the longest number represented by Roman numerals
	if ($value <= 0 || $value > 3888888) return $value;
	$r2d1 = new RomanToDecimal();
	$r2d1->ToRoman($value);
	if ($r2d1->numThousands > 4) {
		$thousandString = "";
		for ($j = 0; $j < $r2d1->numThousands; $j++) $thousandString .= "M";
		$r2d2 = new RomanToDecimal();
		$r2d2->ToRoman($r2d1->numThousands);
		$thBase = "<span style='border-top:1px solid #000'>" . $r2d2->romanNumeral . "</span>";
		return str_replace($thousandString, $thBase, $r2d1->romanNumeral);
	}
	else return $r2d1->romanNumeral;
 }
 ?>