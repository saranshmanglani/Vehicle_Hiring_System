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
    <!--<marquee vspace="40"><font color="red" size="6"><b>Welcome To Vehicle Hiring System</b></font></marquee>-->
	<link rel="stylesheet" href="stylesheets/stylesheet(location).css">
		<script>
			function chkstat()
			{
					if("<?php isset($_GET['li']);?>" && "<?php isset($_GET['lo']);?>")
						window.location.href='http://localhost/Vehicle Hiring System/location.php?lo=hidden&li=visible';
			}
			function dbstore(cid)
			{
				if("<?php echo $_GET['lo'];?>"=="visible" && "<?php echo $_GET['li'];?>"=="hidden")
				{
					window.location.href='http://localhost/Vehicle Hiring System/dbstore.php?cty='+cid;
					return false;
				}
				else
				{
					window.location.href='http://localhost/Vehicle Hiring System/dbstore.php?li=f&cty='+cid;
					return false;
				}
			}
		</script>
  </head>
  <body onload="chkstat()">
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="http://localhost/Vehicle Hiring System/location.php?lo=<?php echo $_GET['lo'];?>&li=<?php echo $_GET['li'];?>">Vehicle Hiring System</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="http://localhost/Vehicle Hiring System/location.php?lo=<?php echo $_GET['lo'];?>&li=<?php echo $_GET['li'];?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href="http://localhost/Vehicle Hiring System/about_us.php?lo=<?php echo $_GET['lo'];?>&li=<?php echo $_GET['li'];?>"><span class="glyphicon glyphicon-info-sign"></span> About Us</a></li>
				<li><a href="http://localhost/Vehicle Hiring System/policies.php?lo=<?php echo $_GET['lo'];?>&li=<?php echo $_GET['li'];?>"><span class="glyphicon glyphicon-ok-circle"></span> Policies</a></li>
				<li><a href="http://localhost/Vehicle Hiring System/login.php?pg=h&rs=0&ex=0" id="lgsp" class="<?php echo $_GET['li'];?>"><span class="glyphicon glyphicon-log-in"></span> Login/Sign up</a></li>
				<li><a href="http://localhost/Vehicle Hiring System/dbstore.php?lo=t" id="lout" class="<?php echo $_GET['lo'];?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			</ul>
		</div>
	</nav>
    <div class="container">
		<div class="row">
			<div class="col-md-4 loc-sec">
				<h2 class="text-center">Select Location</h2>
				<form class="loc-form" method="post" action="car_details.html">
				<div class="dropdown">
					<button class="btn btn-primary btn-lg btn-block dropdown-toggle ddm" data-toggle="dropdown">Select City <span class="caret"></button>
					<ul class="dropdown-menu col-md-12 ddlst">
						<li><a class="dropdown-item" id="Allahabad" href="http://localhost/Vehicle Hiring System/car_details.php?lo=<?php echo $_GET['lo'];?>&li=<?php echo $_GET['li'];?>" onclick="return dbstore('Allahabad')">Allahabad</a></li>
						<li><a class="dropdown-item" id="Lucknow" href="http://localhost/Vehicle Hiring System/car_details.php?lo=<?php echo $_GET['lo'];?>&li=<?php echo $_GET['li'];?>" onclick="return dbstore('Lucknow')">Lucknow</a></li>
						<li><a class="dropdown-item" id="Delhi" href="http://localhost/Vehicle Hiring System/car_details.php?lo=<?php echo $_GET['lo'];?>&li=<?php echo $_GET['li'];?>" onclick="return dbstore('Delhi')">Delhi</a></li>
						<li><a class="dropdown-item" id="Patna" href="http://localhost/Vehicle Hiring System/car_details.php?lo=<?php echo $_GET['lo'];?>&li=<?php echo $_GET['li'];?>" onclick="return dbstore('Patna')">Patna</a></li>
						<li><a class="dropdown-item" id="Raipur" href="http://localhost/Vehicle Hiring System/car_details.php?lo=<?php echo $_GET['lo'];?>&li=<?php echo $_GET['li'];?>" onclick="return dbstore('Raipur')">Raipur</a></li>
						<li><a class="dropdown-item" id="Kanpur" href="http://localhost/Vehicle Hiring System/car_details.php?lo=<?php echo $_GET['lo'];?>&li=<?php echo $_GET['li'];?>" onclick="return dbstore('Kanpur')">Kanpur</a></li>
						<li><a class="dropdown-item" id="Mumbai" href="http://localhost/Vehicle Hiring System/car_details.php?lo=<?php echo $_GET['lo'];?>&li=<?php echo $_GET['li'];?>" onclick="return dbstore('Mumbai')">Mumbai</a></li>
						<li><a class="dropdown-item" id="Kolkata" href="http://localhost/Vehicle Hiring System/car_details.php?lo=<?php echo $_GET['lo'];?>&li=<?php echo $_GET['li'];?>" onclick="return dbstore('Kolkata')">Kolkata</a></li>
					</ul>
				</div>
				</form>
			</div>
			<div class="col-md-8 banner-sec">
				<div id="mycarousel" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="false">
					<div class="carousel-inner">
						<div class="item active">
							<img class="img-fluid" src="images/1.jpg" alt="First slide">
						</div>
						<div class="item">
							<img class="img-fluid" src="images/3.jpg" alt="First slide">
						</div>
						<div class="item">
							<img class="img-fluid" src="images/4.jpg" alt="First slide">
						</div>
						<div class="item">
							<img class="img-fluid" src="images/5.jpg" alt="First slide">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bootstrap/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>