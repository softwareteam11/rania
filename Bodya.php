<?php
/*session_start();
error_reporting(E_PARSE | E_ERROR );*/
require_once("db.php");
require_once("connect.php");


class Bodya{
	private static  $_instance=null;
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	public static  function get_instance_bodya (){
								  if (!self::$_instance){
									 self::$_instance = new bodyshape(); 
								  }							 
								  return self::$_instance ;
}		

		
        public function show_bodies(){
           
            $connectObject=Database::getInstance();
      $connect=$connectObject->getConnection();
      $sql= "SELECT  type, paragraph ,image FROM bodyshape";
      $results = mysqli_query($connect,$sql);
      if(mysqli_query($connect, $sql))
	  {
			//echo "Records added successfully.";
			return $results;
	  }
      else
      {
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect_db);
      }

        }
}
?>
