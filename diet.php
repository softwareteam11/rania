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
         return $results;

        }
       else
       {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect_db);
       }

        }
		
		public function diet_schedule($id){
           
            $connectObject=Database::getInstance();
      $connect=$connectObject->getConnection();
      $sql= "SELECT  name, day1 ,day2, day3, day4, day5, day6, day7 FROM schedule where id=".$id;
      $results = mysqli_query($connect,$sql);
      if(mysqli_query($connect, $sql))
        {
			return $results;
          /* $i=0; $arr;
           while($row=mysqli_fetch_array($results))
            {
				echo "<br>"."<br>" . $row["name"]."<br>";
				echo "<br>"."<br>" . $row["day1"]."<br>";
				echo "<br>"."<br>" . $row["day2"]."<br>";
				echo "<br>"."<br>" . $row["day3"]."<br>";
				echo "<br>"."<br>" . $row["day4"]."<br>";
				echo "<br>"."<br>" . $row["day5"]."<br>";
				echo "<br>"."<br>" . $row["day6"]."<br>";
				echo "<br>"."<br>" . $row["day7"]."<br>";
            } */
        }
       else
       {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect_db);
       }
        }
}
?>
