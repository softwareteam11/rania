<?php
include_once("db.php");
include_once("diet.php");
include_once ("Controller.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Easy Fit</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div>
			<div id="logo">
				<a href="index.html"><img src="images/logo.png" alt="LOGO"></a>
			</div >
			<ul id="navigation">
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
				<li class="selected">
					<a href="dietview.php">Diets</a>
				</li>
				<li>
					<a href="Exercises.php">Exercises</a>
				</li>
				<li>
					<a href="Sign.php">Sign In</a>
				</li>
				
			</ul>
			<p id="in">
				<a href="Sign.php">Sign In</a>
			</p >
			<br>
			<!--<p id="in2">or</p>-->
			<p id="in1">
				<a href="Sign.php">Sign Up</a>
			</p >
			
		</div>
		<!--<a href="Sign.html">Sign In</a>-->
	</div>
	<div id="contents">
		<div id="adbox">
		
			<div id="pricing_table_wdg">
		  
			<?php
			$controll=controller::get_instance_controller();
			
			$results = $controll->schedule();
			$i=1;
			  while($row=  mysqli_fetch_assoc($results))
            {
				 
            ?>
            <ul>
				<li><?php echo 'Day'.$i; ?></li>
                <li><?php echo $row['day'.$i]; ?></li>
                
            </ul>
			<?php
			$i++;
			}
			 ?>
			</div>
		</div>
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
							<a href="Sign.php">Sign In</a>
						</li>
					</ul>
	</div>
</body>
</html>
