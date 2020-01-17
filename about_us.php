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
				<li class="active"><a href="http://localhost/Vehicle Hiring System/about_us.php?lo=<?php echo $_GET['lo'];?>&li=<?php echo $_GET['li'];?>"><span class="glyphicon glyphicon-info-sign"></span> About Us</a></li>
				<li><a href="http://localhost/Vehicle Hiring System/policies.php?lo=<?php echo $_GET['lo'];?>&li=<?php echo $_GET['li'];?>"><span class="glyphicon glyphicon-ok-circle"></span> Policies</a></li>
				<li><a href="http://localhost/Vehicle Hiring System/login.php?pg=h&rs=0&ex=0" id="lgsp" class="<?php echo $_GET['li'];?>"><span class="glyphicon glyphicon-log-in"></span> Login/Sign up</a></li>
				<li><a href="http://localhost/Vehicle Hiring System/dbstore.php?lo=t" id="lout" class="<?php echo $_GET['lo'];?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			</ul>
		</div>
	</nav>
    <div class="container">
		<div class="row">
			<div class="about-us">
				<h2 class="text-center">About Us</h2>
				<center><p><b>A Vehicle Hiring System is a system in which a vehicle can be hired i.e. it can be used temporarily for a period of time with a fee.
					Hiring a vehicle assists people to get around even when they do not have access to their own personal vehicle or don’t own a vehicle at all. The individual who want to hire a vehicle must first contact the Vehicle Rental Company for the desired vehicle. This is done by the proposed system.</p>
					<p>The Vehicle Hiring System is being developed for customers so that they can book their vehicles from any part of their city. This website takes information from the customers through filling their details. A customer being registered in the website has the facility to book a vehicle which he/she requires.
					The proposed system is completely integrated online systems. It automates manual procedure in an effective and efficient way. This automated system facilitates customer and provides to fill up the details according to their requirements. It includes type of vehicle they are trying to hire and location.
				</b></p></center>
			</div>
		</div>
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bootstrap/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
					