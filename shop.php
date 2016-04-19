<?php
include_once("dbmanager.php");
include_once("diet.php");
include_once ("Controller.php");
?>
<!DOCTYPE html>

<!--3ayzeen n7ot sora fel title fe kol page-->
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
					<a href="blog.php">Blog</a>
				</li>
			</ul>
		</div>
		
		</div>
<div id="contents">
		<div id="adbox">
			
		</div>
		<div>
<?php
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

$conn->close();*/
$controll=controller::get_instance_controller();

$controll->get_diet();
?>  
</div>
		</div>

<!--<div class="sidebar">
				
				<ul>
					<li class="selected home">
						<a href="index.html">Day 1</a>
					</li>
					<li class="about">
						<a href="about.html">Day 2</a>
					</li>
					<li class="projects">                            <!--dah hayt8ir-->
						<!--<a href="projects.html">Day 3</a>
					</li>
					<li class="blog">
						<a href="blog.html">Day 4</a>
					</li>
					<li class="contact">                           
						<a href="contact.html">Day 5</a>
					</li>
					<li class="contact">                            
						<a href="contact.html">Day 6</a>
					</li>
					<li class="contact">                             
						<a href="contact.html">Day 7</a>
					</li>
				</ul>-->
			<	
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
							<a href="blog.html">Blog</a>
						</li>
					</ul>
	</div>
</body>
</html>