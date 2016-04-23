<?php
//this is a singelton class 
error_reporting(E_PARSE );
require_once("diet.php");
require_once("bodya.php");
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
	
	public function get_body(){
	$d=new Bodya();
	$results=Bodya::show_bodies();
	return $results;
	}
	
	public function schedule(){
	$d=new diet();
	$results = diet::diet_schedule();
	return $results;
	}
	public function CalculateWeight ($var)
	{
		switch ($_POST['gender']) {
    case "male":
        $person=new male;
        break;
    case "female":
        $person=new female;
break;}

switch ($_POST['cm']) {
    case 1:
        $num=$person->CalculateByCMs($_POST['Height']);
		/*CalculateByInches($_POST['Height']);*/
        header("Location: main.php?weight=".$num);
        exit;
		//echo "<div class = 'number'> The ideal weight is {$num} </div>";
        break;
    case 0:
	$num=$person->CalculateByInches($_POST['Height']);
    header("Location: main.php?weight=".$num);
        exit;
//echo "<div class = 'number'> The ideal weight is {$num} </div>";
break;}
	}

}
?>
