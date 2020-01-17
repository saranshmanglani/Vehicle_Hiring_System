<?php
	include 'connection.php';
	$sql="SELECT * FROM booking_details;";
	$result=mysqli_query($conn,$sql);
	$resultCheck=mysqli_num_rows($result);
	$sql="SELECT * FROM booking_details WHERE sno='$resultCheck';";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
?>
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
	<link rel="stylesheet" href="stylesheets/stylesheet(payment).css">
	<script>
		function fillsp(val)
		{
			if((document.getElementById(val).value.length+1)%5==0)
				document.getElementById(val).value+=" ";			
		}
		function showsec(sid,hid1,hid2,hid3)
		{
			document.getElementById(sid).classList.remove('hidden');
			document.getElementById(hid1).classList.add('hidden');
			document.getElementById(hid2).classList.add('hidden');
			document.getElementById(hid3).classList.add('hidden');
		}
		function confmsg()
		{
			if(confirm("Are You Sure You Want To Cancel The Transaction"))
				window.location.href="http://localhost/Vehicle Hiring System/dbstore.php?lo=t";
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
				<li><a href="http://localhost/Vehicle Hiring System/location.php?lo=visible&li=hidden" id="hm""><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href="http://localhost/Vehicle Hiring System/about_us.php?lo=visible&li=hidden" id="au""><span class="glyphicon glyphicon-info-sign"></span> About Us</a></li>
				<li><a href="http://localhost/Vehicle Hiring System/policies.php?lo=visible&li=hidden" id="pl""><span class="glyphicon glyphicon-ok-circle"></span> Policies</a></li>
				<li><a href="http://localhost/Vehicle Hiring System/location.php?lo=hidden&li=visible" id="lout""><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			</ul>
		</div>
	</nav>
    <div class="container">
		<div class="row">
			<h2 class="text-center">Select Payment Method</h2>
			<div class="col-md-4 optn-sec">
				<input type="button" id="nbb" class="btn btn-default btn-lg btn-block btn2" value="Net Banking" onclick="showsec('nb','cod','dc','det')">
				<input type="button" id="dcb" class="btn btn-default btn-lg btn-block btn3" value="Credit/Debit Card" onclick="showsec('dc','nb','cod','det')">
				<input type="button" id="codb" class="btn btn-default btn-lg btn-block btn1" value="Cash On Delivery" onclick="showsec('cod','nb','dc','det')">
				<input type="button" class="btn btn-success btn-lg btn-block cont" value="Continue">
				<input type="button" class="btn btn-danger btn-lg btn-block cont" value="Cancel" onclick="confmsg()">
			</div>
			<div id="det" class="col-md-8">
				<center><font size="5"><p><b> <u>NAME:</u> <?php echo $row['name']; ?></b></br>
				<b> <u>Car Hired:</u> <?php echo $row['car']; ?></b></br>
				<b> <u>For Date:</u> <?php echo $row['pickup_date']; ?></b></br>
				<b> <u>Time:</u> <?php echo $row['pickup_time']; ?></b></br>
				<b> <u>Address:</u> <?php echo $row['address']; ?></b>
				<h3><b><u>Payable Amount:</u> ₹<?php echo $_GET['ep']?></b></h3></p></font></center>
			</div>
			<div id="nb" class="col-md-8 nb-sec hidden">
				<div class="dropdown">
					<button class="btn btn-primary btn-lg dropdown-toggle" type="button" data-toggle="dropdown">Select Bank<span class="caret"></span></button>
					<ul class="dropdown-menu">
						<li>State Bank of India</li>
						<li>Bank of Baroda</li>
						<li>Punjab National Bank</li>
					</ul>
				</div>
			</div>
			<div id="dc" class="col-md-8 dc-sec hidden">
					<center>
					<input type="text" id="cnum" class="cnb" placeholder="Enter Card Number" maxlength="19" oninput="fillsp(id)"></br>
					<label class="dlbl">Expiry Date:</label>
					<input type="date" class="dte">
					<input type="text" class="cvv" placeholder="CVV" maxlength="3">
					</center>
			</div>
			<div id="cod" class="col-md-8 cod-sec hidden">
				<h3 class="text-center">We also accept Credit/Debit cards on delivery, subject to availability of the payment device. Please check with the delivery agent.</h3>
			</div>
		</div>
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bootstrap/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>