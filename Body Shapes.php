<?php
include_once("db.php");
include_once("Bodya.php");
include_once ("Controller.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Easy Fit-Body Shapes</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="icon" href="imag.png" type="image/png"/>
</head>
<body>
	<div id="header">
		<div>
			<div id="logo">
				<a href="index.php"><img src="images/logo.png" alt="LOGO"></a>
			</div>
			<ul id="navigation">
				<li class="selected">
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
				<li>
					<a href="shop.php">Diets</a>
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
		Know your body shape
		<?php 
		$ii='photo/body-shapes-page.jpg';
		echo "<img src='{$ii}'  alt='Mountain View' height='500' width='900'>"?>
		</p>
		</div>
		<div >
<?php

$controll=controller::get_instance_controller();

$d=$controll->get_body();
 $ii=0; $arr;
while($row=mysqli_fetch_array($d))
{$ii = $row['image'];

  echo "<br>"."<br>" . $row["type"]."<br>" ."<img src='{$ii}'  alt='Mountain View'>". $row["paragraph"]. "<br>";
//echo "<img src='{$ii}'  alt='Mountain View'>";

}

?>
</div>  
</div>
		<
	<!----footer------------------>
	<div id="footer">
					<ul>
						<li>
							<a href="index.html">Home</a>
						</li>
						<li>
							<a href="about.html">About</a>
						</li>
						<li>
							<a href="shop.html">Diets</a>
						</li>
						<li>
							<a href="Exercises.html">Exercises</a>
						</li>
						<li>
							<a href="Sign.html">Sign In</a>
						</li>
					</ul>
	</div>
</body>
</html>