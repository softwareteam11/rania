<?php
ini_set('display_errors', 'On');
include_once ("Controller.php");
include_once ("Calculate weight.php");
require_once('Person.php');
$controll=controller::get_instance_controller();


$m=$controll->CalculateWeight ($_POST['gender'],$_POST['cm'],$_POST['Height']);

echo "<div class='number'> Your ideal weight is ". $m;


/*switch ($_POST['gender']) {
    case "male":
        $person=new male;
        break;
    case "female":
        $person=new female;
break;}

switch ($_POST['cm']) {
    case 1:
        $num=$person->CalculateByCMs($_POST['Height']);
        //CalculateByInches($_POST['Height']);
        //header("Location: Calculate weight.php?weight=".$num);
        //exit;
        //echo "<div class = 'number'> The ideal weight is {$num} </div>";
       // break;
  // case 0:
   // $num=$person->CalculateByInches($_POST['Height']);
   // header("Location: Calculate weight.php?weight=".$num);
     //   exit;
/*echo "<div class = 'number'> The ideal weight is {$num} </div>";
 echo "your ideal weight is "; 
//$con=controller::get_instance_controller();
//$con->CalculateWeight($_POST['gender'], $_POST['cm'] ,$_POST['Height']);
}
 /*$Gender1=$_POST['gender'];
$person=null;
/*if(isset($_POST)*/
/*switch ($Gender1) {
    case "male":
        $person=new male;
        break;
    case "female":
        $person=new 0female;
break;}
$CM1=$_POST['cm'];
switch ($CM1) {
    case 1:
        $num=$person->CalculateByCMs($_POST['Height']);
        /*CalculateByInches($_POST['Height']);*/
       /* header("Location: Calculate weight.php?weight=".$num);
        exit;
        //echo "<div class = 'number'> The ideal weight is {$num} </div>";
        break;
    case 0:
    $num=$person->CalculateByInches($_POST['Height']);
    header("Location: Calculate weight.php?weight=".$num);
        exit;
//echo "<div class = 'number'> The ideal weight is {$num} </div>";
break;*///}
/*if (isset($_POST)) { 
Do manipulation
}*/
?> 

