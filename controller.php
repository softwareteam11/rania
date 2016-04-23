<?php
//this is a singelton class 
error_reporting(E_PARSE );
require_once("diet.php");
require_once("bodya.php");


class controller {
	private static  $_instance=null;
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
}
?>
