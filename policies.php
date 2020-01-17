<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Vehicle Hiring System</title>
	<link rel="icon" type="image/jpg" href="images/vhs.jpg">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="stylesheets/stylesheet(about_us).css">
  </head>
  <body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="http://localhost/Vehicle Hiring System/location.php?lo=<?php echo $_GET['lo'];?>&li=<?php echo $_GET['li'];?>">Vehicle Hiring System</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="http://localhost/Vehicle Hiring System/location.php?lo=<?php echo $_GET['lo'];?>&li=<?php echo $_GET['li'];?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href="http://localhost/Vehicle Hiring System/about_us.php?lo=<?php echo $_GET['lo'];?>&li=<?php echo $_GET['li'];?>"><span class="glyphicon glyphicon-info-sign"></span> About Us</a></li>
				<li class="active"><a href="http://localhost/Vehicle Hiring System/policies.php?lo=<?php echo $_GET['lo'];?>&li=<?php echo $_GET['li'];?>"><span class="glyphicon glyphicon-ok-circle"></span> Policies</a></li>
				<li><a href="http://localhost/Vehicle Hiring System/login.php?pg=h&rs=0&ex=0" id="lgsp" class="<?php echo $_GET['li'];?>"><span class="glyphicon glyphicon-log-in"></span> Login/Sign up</a></li>
				<li><a href="http://localhost/Vehicle Hiring System/dbstore.php?lo=t" id="lout" class="<?php echo $_GET['lo'];?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			</ul>
		</div>
	</nav>
    <div class="container">
		<div class="row">
			<div class="about-us">
				<h2 class="text-center">Our Policies</h2>
				<ul>
					<h4><b>
					<li>Our customers are only allowed to drive a company car if they have a valid driver’s license.</li></br>
					<li>Customers need submit a copy of their driver’s license at the time when the car is handled to them.</li></br>
					<li>Our customers are allowed to hire a car for a maximum of 24 hours.</li></br>
					<li>If the car is returned after the specified time, charges per hour would be doubled after an hour relaxation. </li></br>
					</b></h4>
				</ul>
			</div>
		</div>
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bootstrap/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
					