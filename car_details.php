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
	<link rel="stylesheet" href="stylesheets/stylesheet(car_details).css">
	<script>
		function chkfun(aid,rs,ex,cid)
		{
			if("<?php echo $_GET['lo'];?>"=="hidden" && "<?php echo $_GET['li'];?>"=="visible")
			{
				alert("Login To Continue");
				document.getElementById(aid).href="http://localhost/Vehicle Hiring System/dbstore.php?pg=b&car="+cid+"&rs="+rs+"&ex="+ex;
				//document.getElementById(aid).href="http://localhost/Vehicle Hiring System/login.php?pg=b&rs="+rs+"&ex=50";
			}
			else //("<?php echo $_GET['lo'];?>"=="visible" && "<?php echo $_GET['li'];?>"=="hidden")
			{
				window.location.href="http://localhost/Vehicle Hiring System/dbstore.php?car="+cid+"&rs="+rs+"&ex="+ex;
				return false;
			}
		}
	</script>
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
				<li><a href="http://localhost/Vehicle Hiring System/policy.php?lo=<?php echo $_GET['lo'];?>&li=<?php echo $_GET['li'];?>"><span class="glyphicon glyphicon-ok-circle"></span> Policies</a></li>
				<li><a href="http://localhost/Vehicle Hiring System/login.php?pg=b&rs=0&ex=0" id="lgsp" class="<?php echo $_GET['li'];?>"><span class="glyphicon glyphicon-log-in"></span> Login/Sign up</a></li>
				<li><a href="http://localhost/Vehicle Hiring System/dbstore.php?lo=t" id="lout" class="<?php echo $_GET['lo'];?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			</ul>
		</div>
	</nav>
	<marquee><font color="red" size="5"><b>We do not include fuel cost. We will give you a full tank, and we need the same back from you.</b></font></marquee>
    <div class="container">
		<div class="row">
			<div class="cardet">
				<div class="panel-group">
					<div class="panel panel-default">
						<a href="http://localhost/Vehicle Hiring System/book.php?lo=visible&rs=850&ex=50" id="fes" onclick="return chkfun(id,'850','50','Ford EcoSport')"><div class="panel-body panel2">
							<img src="images/Ford_EcoSport.png" alt="car2" class"pull-left">
							<label class="lb1o">Ford EcoSport<br><label class="lb1i">5 Seater</label></label>
							<label class="pull-right"><h1>₹850</h1><label>Excess ₹50/hr</label>
						</div></a>
					</div>
					<div class="panel panel-default">
						<a href="http://localhost/Vehicle Hiring System/book.php?lo=visible&rs=1050&ex=50" id="hcty" onclick="return chkfun(id,'1050','50','Honda City')"><div class="panel-body panel3">
							<img src="images/Honda_City.png" alt="car3" class"pull-left">
							<label class="lb1o">Honda City<br><label class="lb1i">5 Seater</label></label>
							<label class="pull-right"><h1>₹1050</h1><label>Excess ₹50/hr</label>
						</div></a>
					</div>
					<div class="panel panel-default">
						<a href="http://localhost/Vehicle Hiring System/book.php?lo=visible&rs=950&ex=50" id="hgi" onclick="return chkfun(id,'950','50','Hyundai Grand i10')"><div class="panel-body panel3">
							<img src="images/Hyundai_Grand_i10.png" alt="car3" class"pull-left">
							<label class="lb1o">Hyundai Grand i10<br><label class="lb1i">5 Seater</label></label>
							<label class="pull-right"><h1>₹950</h1><label>Excess ₹50/hr</label>
						</div></a>
					</div>
					<div class="panel panel-default">
						<a href="http://localhost/Vehicle Hiring System/book.php?lo=visible&rs=1200&ex=50" id="msp" onclick="return chkfun(id,'1200','50','Mahindra Scorpio')"><div class="panel-body panel3">
							<img src="images/Mahindra_Scorpio.png" alt="car3" class"pull-left">
							<label class="lb1o">Mahindra Scorpio<br><label class="lb1i">5 Seater</label></label>
							<label class="pull-right"><h1>₹1200</h1><label>Excess ₹50/hr</label>
						</div></a>
					</div>
					<div class="panel panel-default">
						<a href="http://localhost/Vehicle Hiring System/book.php?lo=visible&rs=850&ex=50" id="nsy" onclick="return chkfun(id,'850','50','Nissan Sunny')"><div class="panel-body panel3">
							<img src="images/Nissan_Sunny.png" alt="car3" class"pull-left">
							<label class="lb1o">Nissan Sunny<br><label class="lb1i">5 Seater</label></label>
							<label class="pull-right"><h1>₹850</h1><label>Excess ₹50/hr</label>
						</div></a>
					</div>
					<div class="panel panel-default">
						<a href="http://localhost/Vehicle Hiring System/book.php?lo=visible&rs=1175&ex=50" id="tiv" onclick="return chkfun(id,'1175','50','Toyota Innova')"><div class="panel-body panel3">
							<img src="images/Toyota_Innova.png" alt="car3" class"pull-left">
							<label class="lb1o">Toyota Innova<br><label class="lb1i">5 Seater</label></label>
							<label class="pull-right"><h1>₹1175</h1><label>Excess ₹50/hr</label>
						</div></a>
					</div>
					<div class="panel panel-default">
						<a href="http://localhost/Vehicle Hiring System/book.php?lo=visible&rs=1380&ex=50" id="mxuv" onclick="return chkfun(id,'1380','50','Mahindra XUV')"><div class="panel-body panel3">
							<img src="images/Mahindra_XUV.png" alt="car3" class"pull-left">
							<label class="lb1o">Mahindra XUV<br><label class="lb1i">5 Seater</label></label>
							<label class="pull-right"><h1>₹1380</h1><label>Excess ₹50/hr</label>
						</div></a>
					</div>
					<div class="panel panel-default">
						<a href="http://localhost/Vehicle Hiring System/book.php?lo=visible&rs=980&ex=50" id="mco" onclick="return chkfun(id,'980','50','Maruti Celerio')"><div class="panel-body panel3">
							<img src="images/Maruti_Celerio.png" alt="car3" class"pull-left">
							<label class="lb1o">Maruti Celerio<br><label class="lb1i">5 Seater</label></label>
							<label class="pull-right"><h1>₹980</h1><label>Excess ₹50/hr</label>
						</div></a>
					</div>
					<div class="panel panel-default">
						<a href="http://localhost/Vehicle Hiring System/book.php?lo=visible&rs=870&ex=50" id="mst" onclick="return chkfun(id,'870','50','Maruti Swift')"><div class="panel-body panel3">
							<img src="images/Maruti_Swift.png" alt="car3" class"pull-left">
							<label class="lb1o">Maruti Swift<br><label class="lb1i">5 Seater</label></label>
							<label class="pull-right"><h1>₹870</h1><label>Excess ₹50/hr</label>
						</div></a>
					</div>
					<div class="panel panel-default">
						<a href="http://localhost/Vehicle Hiring System/book.php?lo=visible&rs=950&ex=50" id="msd" onclick="return chkfun(id,'950','50','Maruti Swift Dzire')"><div class="panel-body panel3">
							<img src="images/Maruti_Swift_Dzire.png" alt="car3" class"pull-left">
							<label class="lb1o">Maruti Swift Dzire<br><label class="lb1i">5 Seater</label></label>
							<label class="pull-right"><h1>₹950</h1><label>Excess ₹50/hr</label>
						</div></a>
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