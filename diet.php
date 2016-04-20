<?php
/*session_start();
error_reporting(E_PARSE | E_ERROR );*/
require_once("db.php");
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

        
        public function show_diets(){
           
            $connectObject=Database::getInstance();
      $connect=$connectObject->getConnection();
      $sql= "SELECT  type, text ,iamge FROM dietplan";
      $results = mysqli_query($connect,$sql);
      if(mysqli_query($connect, $sql))
        {
            //echo "Records added successfully.";
          $i=0; $arr;
            while($row=mysqli_fetch_array($results))
            {
              echo "<br>"."<br>" . $row["type"]."<br>" ."<br>" . $row["text"]. "<br>";
           $i = $row['iamge'];
        echo "<img src='{$i}'  alt='Mountain View' style='width:900px;height:300px;'>";

            }
        }
       else
       {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect_db);
       }

        }
}
?>
