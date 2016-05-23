<?php
include_once ("Controller.php");   //de elly kanet 3amla moshkla 
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Easy Fit-Log In</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="icon" href="C:\Users\menna lotfy\Desktop/imag.png" type="image/png"/>
</head>
<body>
	<div id="header">
		<div>
			<div id="logo">
				<a href="index.php"><img src="images/logo.png" alt="LOGO"></a>
			</div>
			<form id="navigation" action="Sign.php">
			<br>
			<br>
			
			<div id="f1"> E-mail 
  <input type="email" name="email" required> <br><br>
 
  Password 
  <input type="password" name="password" required>
  <br><br>
  </div>
  <input type="submit" name="sub1" value="Log In">
 <?php

/*$controll=controller::get_instance_controller();
//session_start();
if (isset($_POST[sub1]))
{echo "hee";
echo $_POST['email'];
$m=$controll->login($_POST['email'],$_POST['password']);
header("Location: index.php");*/
//}


  ?>
			</form>
		</div>
	</div>
	<div id="contents">
	<div class="SignUpContainer">
	<form action="Sign.php"  method="POST">
		<!--<div id="adbox">-->
			<p> Don't have an account,Create one </p>
 Name <input class ="Box" type="text"  name="name" required>
 <br>
 <br>
 E-mail <input class ="Box1" type="email" name="email" required>
 <br> <br>
 Password  <input class ="Box2" type="password"  name="password" required>
 <!--a3mel repassord-->
 <br> <br>
 Re-Password  <input class ="Box3" type="password" name="re-password" required>
 
 <br> <br>
 Weight <input class ="Box3" type="number" name="weight" min="30" max="220" required>
 <br> <br>

 Gender:<br>
  <input class="CheckBox" type="radio" name="gender" value="male" required> Male<br>
  <input class="CheckBox"  type="radio" name="gender" value="female"> Female<br>
  <br> <br>   <br>
 <input class="SubmitBox" type="submit" name="sub" value="Create an account">	
 <?php
 session_start();
 $controll=controller::get_instance_controller();

if (isset($_POST[sub]))
{
$m=$controll->sign_up($_POST['name'],$_POST['email'],$_POST['password'],$_POST['weight'],$_POST['gender']);
}
?>	
		<!--</div>-->
		</form>
		</div>
		<img id="i1" src="images/whisper1.jpg">
	</div>
	<div id="footer">
					<ul>
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="about.php">About</a>
						</li>
						<li>
							<a href="dietview.php">Diets</a>
						</li>
						<li>
							<a href="Exercises.php">Exercises</a>
						</li>
						<li>
							<a href="blog.php">Blog</a>
						</li>
					</ul>
	</div>
</body>
</html>
