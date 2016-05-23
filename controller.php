<?php
//this is a singelton class 
error_reporting(E_PARSE );
require_once("diet.php");
//require_once('Calculate weight.php');
require_once('bodya.php');
require_once('Person.php');
require_once('login.php');
require_once('Sign Up.php');

class controller {
	private static  $_instance=null;
	private $person=null;
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
	
	public function schedule($id){
	$d=new diet();
	$results = diet::diet_schedule($id);
	return $results;
	}
	
	
	public function get_body(){
	$d=new Bodya();
	$results=Bodya::show_bodies();
	return $results;
	}
	public function login($var1,$var2)
	{
		$d=new login();
		echo"here";
		$results=$d->authentication($var1,$var2);
		return $results;
	} 
	public function  sign_up($var1,$var2,$var3,$var4,$var5)
	{
		$d=new sinup($var1,$var2,$var3,$var4,$var5);
		$results=$d->chech_sinup();
		return $results;
	}
	public function CalculateWeight ($var1,$var2)
	{
		switch ($var1) {
    case "male":
        $person=new male;
        break;
    case "female":
        $person=new female;
break;}
        $num=$person->CalculateByCMs($var2);
		
		return $num;
       
}
	}
	
?>
