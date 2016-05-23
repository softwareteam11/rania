<?php     
require_once("db.php");
require_once("connect.php");
?>
<?php
class sinup {
public $name;	
public $email;
public $password;
public $weight;
public $gender;
public static $_instance=null;
public $connectObject;	

  public function __construct($var1,$var2,$var3,$var4,$var5)
  {
    $this->name = $var1;
    $this->email = $var2;
    $this->password=$var3;
    $this->weight = $var4;
    $this->gender = $var5;
   
  }
public function chech_sinup()
{
if( $this->name&& $this->email && $this->password && $this->weight && $this->gender)
{ 
$connectObject=Database::getInstance();     
      $connect=$connectObject->getConnection();
	/*$sql="SELECT email FROM user WHERE email='$this->email'";
            $remail = $connectObject->  mysqli_query($connect,$sql)
           $checkemail = $connectObject->num_rows($remail);
			if ($checkemail != 0) 
			 {
                echo "This email is already registered! Please type another email...";
             }*/
            
            $result=mysqli_query($connect,$sql);
            echo $result;

             $rowcount=mysqli_num_rows($result);
             echo $rowcount;
             if ($rowcount != 0) 
			 {
                echo "This email is already registered! Please type another email...";
             }
				else 
				{
					if($this->gender=="male")
						{
						mysqli_query($connect,"insert into user (name ,email ,password,weight,gender) values('$this->name','$this->email','$this->password','$this->weight','1') ");
                         }
				
					else 
						mysqli_query($connect,"insert into user (name ,email ,password,weight,gender) values('$this->name','$this->email','$this->password','$this->weight','0') ");			
}}}
}
?>
