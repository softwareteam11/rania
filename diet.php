<?php
/*session_start();
error_reporting(E_PARSE | E_ERROR );*/
require_once("dbmanager.php");
require_once("connect.php");


class diet{
	private static  $_instance=null;
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	public static  function get_instance_diet (){
								  if (!self::$_instance){
									 self::$_instance = new dietplan(); 
								  }							 
								  return self::$_instance ;
}		
private function __construct(){
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "diet";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}} 

 public function show_diets()  
    {
     /* MySQLDatabase::open_connection();
    /* $sql=" select url_sounds,title_of_sound,singer_name,id_sound from sounds ";*/
     /*$sql = "SELECT  type, text ,iamge FROM dietplan";
		$result=$database->query($sql);
		//$result_array=$database->fetch_array($result);
		if ($result->num_rows > 0) {

     // output data of each row
     while($row = $result->fetch_assoc()) {
     	

         echo "<br>"."<br>" . $row["type"]."<br>" ."<br>" . $row["text"]. "<br>";
        $i = $row['iamge'];
    echo "<img src='{$i}'  alt='Mountain View' style='width:900px;height:300px;'>";*/
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "diet";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} */



$sql = "SELECT  type, text ,iamge FROM dietplan";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

     // output data of each row
     while($row = $result->fetch_assoc()) {
     	

         echo "<br>"."<br>" . $row["type"]."<br>" ."<br>" . $row["text"]. "<br>";
        $i = $row['iamge'];
    echo "<img src='{$i}'  alt='Mountain View' style='width:900px;height:300px;'>";

     }
} else {

     echo "0 results";
}

//$conn->close();
   }
		
}
?>
