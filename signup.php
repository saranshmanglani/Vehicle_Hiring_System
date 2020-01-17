<?php
    include 'connection.php';	
	$dlno=$_GET["dlnum"];
	$sql="SELECT * FROM dl_verification WHERE dl_no='$dlno';";
	$result=mysqli_query($conn,$sql);
	$resultCheck=mysqli_num_rows($result);
	if($resultCheck==0)
		echo "<script> alert('Invalid DL Number'); window.location.href='signup.html'; </script>";
	else
	{
		
		$sql="SELECT * FROM users WHERE dl_no='$dlno';";
		$result=mysqli_query($conn,$sql);
		$resultCheck=mysqli_num_rows($result);
		if($resultCheck==0)
		{
			$sql="SELECT * FROM dl_verification WHERE dl_no='$dlno';";
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_assoc($result);
			$fname=$row['fname'];
			$lname=$row['lname'];
			$add=$row['address'];
		}
		else
		{
			echo "<script> alert('User already exists'); window.location.href='http://localhost/Vehicle Hiring System/login.php?pg=h'; </script>";
		}
	}
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
	<link rel="stylesheet" href="stylesheets/stylesheet(signup).css">
	<script>
		function chkinp(val)
		{
			if(!(document.getElementById("no").value=="" || document.getElementById("emad").value=="" || document.getElementById("pd").value=="" || document.getElementById("cpd").value==""))
			{
				if(document.getElementById("no").value.length==10 && document.getElementById("pd").value==document.getElementById("cpd").value)
						document.getElementById(val).removeAttribute("disabled");
				else
				{
					document.getElementById(val).checked=false;
					document.getElementById(val).setAttribute("disabled","disabled");
					document.getElementById("subbt").setAttribute("disabled","disabled");
				}
					
			}
			else
			{
				document.getElementById(val).checked=false;
				document.getElementById(val).setAttribute("disabled","disabled");
				document.getElementById("subbt").setAttribute("disabled","disabled");
			}
		}
		function btnact(val,btv)
		{
			if(document.getElementById(val).checked)
			{
					document.getElementById(btv).removeAttribute("disabled");
			}
			else
			{
				document.getElementById(btv).setAttribute("disabled","disabled");
			}
		}
		function chkno()
		{
			if(document.getElementById('no').value.length!=10)
			{
				alert("Enter Valid Number");
				document.getElementById('no').style.border = "2px solid red";
			}
		}
		function chkequ()
		{
			if(document.getElementById("pd").value==document.getElementById("cpd").value)
			{
				document.getElementById("cpd").style.border = "none";
				document.getElementById("cpd").style.borderBottom = "2px solid black";
			}
			else
			{
				document.getElementById("cpd").style.border = "2px solid red";
				alert("Password not matched");
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
				<li class="active"><a href="http://localhost/Vehicle Hiring System/login.php?pg=h&rs=0&ex=0" id="lgsp" class="visible"><span class="glyphicon glyphicon-log-in"></span> Login/Sign up</a></li>
			</ul>
		</div>
	</nav>
    <div class="container">
		<div class="row">
			<div class="signup-sec">
				<h2 class="text-center">Sign up</h2>
				<form class="login-form" method="post" action="http://localhost/Vehicle Hiring System/user.php">
					<div class="form-group form-inline">
							<center><div class="col-md-12">
								<input type="text" id="dln" name="dl" class="form-control dlno" value="<?php echo $_GET['dlnum']; ?>" readonly>
							</div>
							<div class="col-md-12 frmd">
								</br>
								<input type="text" id="fn" class="form-control fname" value="<?php echo $fname;?>" readonly>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="text" id="ln" class="form-control lname" value="<?php echo $lname;?>" readonly>
							</div></center>
					</div>
					<div class="form-group">
						<div class="col-md-10 col-md-offset-1">
							</br>
							<input type="text" class="form-control" value="<?php echo $add;?>" readonly>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-10 col-md-offset-1">
							</br>
							<input type="email" id="emad" name="email" class="form-control" placeholder="Email Address" oninput="chkinp('chkb')">
						</div>
					</div>
					<div class="form-group form-inline">
						<center><div class="col-md-12">
							</br>
							<input type="password" id="pd" name="pswd" class="form-control pwd" placeholder="Password" oninput="chkinp('chkb')">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="password" id="cpd" class="form-control rpwd" placeholder="Confirm Password" oninput="chkinp('chkb')" onblur="chkequ()">
						</div></center>
					</div>
					<div class="form-group">
						<div class="col-md-6 col-md-offset-3">
							</br>
							<input type="number" id="no" class="form-control" placeholder="Contact Number" oninput="chkinp('chkb')" onblur="chkno()">
						</div>
					</div>
					<div class="form-check">
						<div class="col-md-6 col-md-offset-4">
						</br>
							<input type="checkbox" id="chkb" class="form-check-input" disabled onchange="btnact(id,'subbt')">
							<label class="form-check-label">Accept Terms & Conditions</label>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6 col-md-offset-3">
							</br>
							<input type="submit" id="subbt" class="btn btn-success btn-lg btn-block" disabled value="Sign up">
							</br>
						</div>
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