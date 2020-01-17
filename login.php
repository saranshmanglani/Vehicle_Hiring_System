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
	<link rel="stylesheet" href="stylesheets/stylesheet(login).css">
	<script>
		function checkval(vid,chk)
		{
				document.getElementById(vid).style.border = "none";
				document.getElementById(vid).style.borderBottom = "2px solid black";
				document.getElementById(chk).classList.add('hidden');
		}
		function actval(vid,chk)
		{
			if(document.getElementById(vid).value=="")
			{
				document.getElementById(vid).style.border = "2px solid red";
				document.getElementById(chk).classList.remove('hidden');
			}
		}
	</script>
  </head>
  <body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="http://localhost/Vehicle Hiring System/location.php?lo=hidden&li=visible">Vehicle Hiring System</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="http://localhost/Vehicle Hiring System/location.php?lo=hidden&li=visible"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href="http://localhost/Vehicle Hiring System/about_us.php?lo=hidden&li=visible"><span class="glyphicon glyphicon-info-sign"></span> About Us</a></li>
				<li><a href="http://localhost/Vehicle Hiring System/policies.php?lo=hidden&li=visible"><span class="glyphicon glyphicon-ok-circle"></span> Policies</a></li>
				<li class="active"><a href="http://localhost/Vehicle Hiring System/login.php?pg=h&rs=0&ex=0" id="lgsp"><span class="glyphicon glyphicon-log-in"></span> Login/Sign up</a></li>
			</ul>
		</div>
	</nav>
    <div class="container">
		<div class="row">
			<div class="col-md-12 login-sec">
				<h2 class="text-center">Login Now</h2>
				<form class="login-form" method="post" action="http://localhost/Vehicle Hiring System/loginchk.php?pg=<?php echo $_GET['pg'];?>&rs=<?php echo $_GET['rs'];?>&ex=<?php echo $_GET['ex'];?>">
					<div class="form-group">
						<div class="inner-addon right-addon">
							<i id="chkm" class="glyphicon glyphicon-exclamation-sign hidden"></i>
							<input type="text" name="email" id="em" class="form-control"  autofocus placeholder="Email" onfocus="checkval(id,'chkm')" onblur="actval(id,'chkm')">
						</div>
					</div>
					<div class="form-group">
						<div class="inner-addon right-addon">
							<i id="chkp" class="glyphicon glyphicon-exclamation-sign hidden"></i>
							<input type="password" name="pass" id="pswd" class="form-control" placeholder="Password" onfocus="checkval(id,'chkp')" onblur="actval(id,'chkp')">
						</div>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-success btn-lg btn-block" value="Login">
					</div>
					<div class="form-group">
						<label class="pull-left">Don't have an account!</label>
						<a href="signup.html" class="pull-right">Sign up here</a>
					</div>
				</form>
			</div>
		</div>
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bootstrap/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>