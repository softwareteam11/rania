<?php
//this is a singelton class 
error_reporting(E_PARSE );
require_once("diet.php");
//require_once('Calculate weight.php');
require_once('bodya.php');
require_once('Person.php');

class controller {
	private static  $_instance=null;
	private $person=null;
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	public static  function get_instance_controller  (    ){
		
								  if (!self::$_instance){
									 self::$_instance = new controller (); 
								  }							 
								  return self::$_instance ;
}		


	public function get_diet(){
		/*$tracks=diet::get_instance_diet();*/
	$d=new diet();
	$results=diet::show_diets();
	return $results;
	}
	
	public function schedule(){
	$d=new diet();
	$results = diet::diet_schedule();
	return $results;
	}
	
	
	public function get_body(){
		/*$tracks=diet::get_instance_bodya();*/
	$d=new Bodya();
	$results=Bodya::show_bodies();
	return $results;
	//$d->dodo();
		/*return $tracks_array ;*/
	}
	public function CalculateWeight ($var1,$var2,$var3)
	{
		switch ($var1) {
    case "male":
        $person=new male;
        break;
    case "female":
        $person=new female;
break;}

switch ($var2) {
    case 1:
        $num=$person->CalculateByCMs($var3);
		/*CalculateByInches($_POST['Height']);*/
        // header("Location: Calculate weight.php?weight=".$num);
        // exit;
		//echo "<div class = 'number'> The ideal weight is {$num} </div>";
		return $num;
        break;
    case 0:
	$num=$person->CalculateByInches($var3);
    // header("Location: Calculate weight.php?weight=".$num);
    //     exit;
//echo "<div class = 'number'> The ideal weight is {$num} </div>";
	return $num;
break;
}
	}
	//public function CalculateWeight ($var)
 // 	{
 // 		switch ($_POST['gender']) {
 //     case "male":
 //         $person=new male;
 //       break;
 //     case "female":
 //         $person=new female;
 // break;}
 
 // switch ($_POST['cm']) {
 //    case 1:
 //         $num=$person->CalculateByCMs($_POST['Height']);
 // 		/*CalculateByInches($_POST['Height']);*/
 //         header("Location: main.php?weight=".$num);
 //         exit;
 // 		//echo "<div class = 'number'> The ideal weight is {$num} </div>";
 //         break;
 //     case 0:
 // 	$num=$person->CalculateByInches($_POST['Height']);
 //     header("Location: main.php?weight=".$num);
 //         exit;
 // //echo "<div class = 'number'> The ideal weight is {$num} </div>";
	 // -break;}
		}
?>
