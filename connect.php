<?php
/**
* 
*/
class myconnection {
private $databaseName = "diet";
private $host = "localhost";
private $user = "root";
private $password = ""; 
private static $instance=null; //store the single instance of the database

private function __construct(){
    /*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "diet";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
*/
    //This will load only once regardless of how many times the class is called
    $connection = new mysqli($this->host, $this->user, $this->password) or die (mysql_error());
    $db = mysql_select_db($this->databaseName, $connection) or die(mysql_error()); 
    echo 'DB initiated<br>';
   
}

//this function makes sure there's only 1 instance of the Database class
public static function getInstance(){
    // if(!self::$instance){
    //     self::$instance = new myconnection ();
    // }

    // return self::$instance; 
   if (!self::$_instance){
    self::$_instance = new myconnection (); 
                                  }                          
     return self::$_instance ; 
}

public function con() { 
    //db connection
} 
public function query($query) {
    //queries   
    $sql = mysql_query($query) or die(mysql_error()); 
    return $sql;
}

public function numrows($query) {
    //count number of rows  
    $sql = $this->query($query);
    return mysql_num_rows($sql);
}


}



?>