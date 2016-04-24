<?php

abstract class Abstractperson {
	public $HeightByInches;
	public $HeightByCMs;
	public $IdealWeight;
    abstract function CalculateByInches($HeightByInches);
	abstract function CalculateByCMs($HeightByCMs);
}
class male  extends Abstractperson{
	function CalculateByInches($HeightByInches)
	{
		$IdealWeight=$HeightByInches-60;
		$IdealWeight=$IdealWeight*2.3;
		$IdealWeight=$IdealWeight+50;
		return $IdealWeight;
	}
	function CalculateByCMs($HeightByCMs)
	{
		$IdealWeight=0.9*$HeightByCMs;
		$IdealWeight=$IdealWeight-88;
		return $IdealWeight;
	}
	/*50 + 2.3 (H - 60) -> H = height in inches*/
	/*0.9 H - 88  ->H = height in centimeters.*/
}
class female  extends Abstractperson{
	function CalculateByInches($HeightByInches)   
	{
		$IdealWeight=$HeightByInches-60;
		$IdealWeight=$IdealWeight*2.3;
		$IdealWeight=$IdealWeight+45.5;
		return $IdealWeight;
	}
	function CalculateByCMs($HeightByCMs)
	{
		$IdealWeight=0.9*$HeightByCMs;
		$IdealWeight=$IdealWeight-92;
		return $IdealWeight;
	}
	/*45.5 + 2.3 (H - 60) -> H = height in inches */
	/*0.9 H - 92  ->H = height in centimeters*/
	
}

?>