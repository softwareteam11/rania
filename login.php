<?php
session_start();
error_reporting(E_PARSE );
require_once("db.php");
require_once("connect.php");

class login{
	public   $user_login ;  
	public 	 $id_profile;
    private $password_login ;
	private $db;
	private   $row ;      //rimon:: have the record of user  that has been logged  in 
	public  $log_in ;             //boolean datatype to know if it is still login or not 
private static  $_instance=null;
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	public static  function get_instance_login  (    ){
								  if (!self::$_instance){
									 self::$_instance = new login (); 
								  }
								  return self::$_instance ;
}		 
public function getlogin(){
	 return $this->log_in;

}
	public function authentication($var1,$var2){
		echo"rania";
      
								$user_login = $var1;                                    
								$password_login =$var2;  
								
                              $connectObject=Database::getInstance();
          
                                    $connect=$connectObject->getConnection();

     
      					
								$sql = "SELECT id  FROM user  WHERE name ='$user_login' AND password ='$password_login'  LIMIT 1 ;" ;         // query the person
								$results = mysqli_query($connect,$sql);
									
					$userCount= $db->num_rows($result);     //Count the number of rows returned	
					if ($userCount == 1) {	
						$row= $row=mysqli_fetch_array($results);  
						$this->log_in= 1 ;
						 $this->id_profile = $row['id'];
						echo $this->id_profile;
						 //rimon :: insert username , id_profile in session to be available to all pages 
						 $_SESSION["id_profile"] = $this->id_profile;	
							//$row['id_profile'];	
                             //echo $this->id_profile;					
						 $_SESSION["user_login"] = $user_login;
						 $_SESSION["password_login"] = $password_login;
						
						//exit("<meta http-equiv=\"refresh\" content=\"0\">");
											
						 return $this->log_in;
						/* else {
						
						echo 'That information is incorrect, try again';
						 return $this->log_in;
					} */
}

	}
	public function  log_out(){
		session_unset();
		session_destroy();
		redirect_to("firstpage.php");
	}
}
?>