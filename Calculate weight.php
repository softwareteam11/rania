
<?php
include_once("db.php");
include_once ("Controller.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Easy Fit-Calculate weight</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="icon" href="C:\Users\menna lotfy\Desktop/imag.png" type="image/png"/>
</head>
<body>
	<div id="header">
		<div>
			<div id="logo">
				<a href="index.html"><img src="images/logo.png" alt="LOGO"></a>
			</div>
			<ul id="navigation">
				<li class="selected">
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
					<a href="Sign.php">Sign In</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div id="adbox">
		<p>
		You can calculate your ideal weight please insert your height and age
<!--This ideal weight calculator was specially formulated for kids under 
the age of 18. It is important for children to maintain an ideal weight as it 
assures they are getting enough nutrition as they grow and that they are not putting extra stress on developing joints.
 - See more at: https://www.healthstatus.com/calculate/ideal-weight-children#sthash.MkdKYc0e.dpuf-->		
		</p>
		
			</div>

		<div class="CalculateContainer">
	<form action="Calculate weight.php" method="post">
	Height in:<br><br>   <!--3awza a5leeh required hena-->
	  <input class="Cbox"  type="radio" name="cm" value="1" checked>Centimeters<br>
  <input  class="Cbox"  type="radio" name="cm" value="0">Inches<br>

  <br>
Please,insert your height <input  type="number" name="Height" min="80" max="200" required>
 <br> <br>

 Gender:<br><br>          <!--3awza a5leeh required hena-->
  <input class="CheckBox" type="radio" name="gender" value="male" checked> Male<br>
  <input class="CheckBox"  type="radio" name="gender" value="female"> Female<br>
  <br> <br>   <br>
 <input class="SubmitBox" name ="submit" type="submit" value="Calculate">

 <?php
 $controll=controller::get_instance_controller();

$m=$controll->CalculateWeight ($_POST['gender'],$_POST['cm'],$_POST['Height']);

echo "<div class='number'> Your ideal weight is ". $m;
 ?>

	</form>
	</div>
	</div>
	<!----footer------------------>
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
							<a href="Sign.php">Sign In</a>
						</li>
					</ul>
	</div>
</body>
</html>