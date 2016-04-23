<?php
//this is a singelton class 
error_reporting(E_PARSE );
require_once("diet.php");


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
	diet::show_diets();
	//$d->dodo();
		/*return $tracks_array ;*/
	}
	
	public function schedule(){
	$d=new diet();
	$results = diet::diet_schedule();
	return $results;
	}
}
?>
