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
	<link rel="stylesheet" href="stylesheets/stylesheet(book).css">
	<script>
		var tdy,hr,min;
		function allfill()
		{
			if(document.getElementById('pdate').value=="" || document.getElementById('ptime').value=="" || document.getElementById('nhrs').value==""  || document.getElementById('paddress').value=="" || document.getElementById('no').value=="")
			{
				alert("FILL ALL DETAILS!!");
				return false;
			}
			else
			{
				var pdate=document.getElementById('pdate').value;
				var ptime=document.getElementById('ptime').value;
				var nhrs=document.getElementById('nhrs').value;
				var padd=document.getElementById('paddress').value;
				var no=document.getElementById('no').value;
				var eprice=document.getElementById('eprice').value;
				window.location.href="http://localhost/Vehicle Hiring System/dbstore.php?ep="+eprice+"&pdate="+pdate+"&ptime="+ptime+"&nhrs="+nhrs+"&padd="+padd+"&no="+no;
				return false;
			}
		}
		function checkval(val)
		{
				document.getElementById(val).style.border = "none";
				document.getElementById(val).style.borderBottom = "2px solid black";
		}
		function actval(val)
		{
			if(document.getElementById(val).value=="")
			{
				document.getElementById(val).style.border = "2px solid red";
		    }
		}
		function cancelb()
		{
			if(confirm("Are You Sure You Want To Cancel The Booking"))
				window.location.href="http://localhost/Vehicle Hiring System/location.php?lo=visible&li=hidden";
		}
		function confmsg()
		{
			return confirm("Are You Sure You Want To Cancel The Booking");
		}
		function chkno()
		{
			if(document.getElementById('no').value.length!=10)
			{
				alert("Enter Valid Number");
				document.getElementById('no').style.border = "2px solid red";
			}
		}
		function estprc(hr,ep)
		{
			if(document.getElementById(hr).value=="")
				document.getElementById(ep).value="0";
			else if(document.getElementById(hr).value==2)
				document.getElementById(ep).value="<?php echo $_GET['rs']?>";
			else
			{
				var x="<?php echo $_GET['rs']?>";
				var y="<?php echo $_GET['ex']?>";
				var z=document.getElementById(hr).value;
				document.getElementById(ep).value=Number(x)+(y*(z-2));
				//document.getElementById(ep).value=Number("<?php echo $_GET['rs']?>")+("<?php echo $_GET['ex']?>"*(document.getElementById(hr).value-2));
			}
		}
		function setdate()
		{
			var today = new Date();
			var dd = today.getDate();
			var mm = today.getMonth()+1;
			var yyyy = today.getFullYear();
			if(dd<10)
				dd='0'+dd;	
			if(mm<10)
				mm='0'+mm;
		    tdy = yyyy+'-'+mm+'-'+dd;
			document.getElementById('pdate').value=tdy;
			document.getElementById('pdate').setAttribute("min", tdy);
			today= new Date(yyyy,mm,Number(dd)+29);
			dd = today.getDate();
			mm = today.getMonth();
			yyyy = today.getFullYear();
			if(dd<10)
				dd='0'+dd;		
			if(mm<10)
				mm='0'+mm;
		    var mxd = yyyy+'-'+mm+'-'+dd;
			document.getElementById('pdate').setAttribute("max", mxd);
			today = new Date();
			hr = (today.getHours()<10?'0':'') + today.getHours();
			min = (today.getMinutes()<10?'0':'') + today.getMinutes();
			document.getElementById('ptime').value=hr+":"+min;
			settime();
		}
		function settime()
		{
			var x=document.getElementById('pdate').value;
			if(x==tdy)
			{
				document.getElementById('ptime').setAttribute("min",hr+":"+min);
				document.getElementById('ptime').setAttribute("max","23:59");
			}
			else
			{
				document.getElementById('ptime').setAttribute("min","00:00");
				document.getElementById('ptime').setAttribute("max","23:59");
			}
		}
	</script>
  </head>
  <body onload="setdate()">
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="http://localhost/Vehicle Hiring System/location.php?lo=<?php echo $_GET['lo'];?>&li=<?php echo $_GET['li'];?>" onclick="return confmsg()">Vehicle Hiring System</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="http://localhost/Vehicle Hiring System/location.php?lo=visible&li=hidden" id="hm" onclick="return confmsg()"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href="http://localhost/Vehicle Hiring System/about_us.php?lo=visible&li=hidden" id="au" onclick="return confmsg()"><span class="glyphicon glyphicon-info-sign"></span> About Us</a></li>
				<li><a href="http://localhost/Vehicle Hiring System/policies.php?lo=visible&li=hidden" id="pl" onclick="return confmsg()"><span class="glyphicon glyphicon-ok-circle"></span> Policies</a></li>
				<li><a href="http://localhost/Vehicle Hiring System/dbstore.php?lo=t" id="lout" class="<?php echo $_GET['lo'];?>" onclick="return confmsg()"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			</ul>
		</div>
	</nav>
    <div class="container">
		<div class="row">
			<div class="signup-sec">
				<h2 class="text-center">Book now</h2>
				<form method="post" onsubmit="return allfill()" action="http://localhost/Vehicle Hiring System/payment.php?" class="form-default">
					<div class="row">
					<div class="form-group col-xs-4 col-md-offset-4">
						
						 <label class="control-label" for="pdate" > Pick up date:</label>
						 <input type="date" class="form-control" id="pdate" name="pdate" onfocus="checkval(id)" onblur="actval(id)" width="10px" onchange="settime()">
					   
					   </div>
					   </div>
					   <div class="row">
						<div class=" form group col-xs-5 col-md-offset-1">
						 <label class="control-label col-sm-6" for="ptime" >Pick up time:</label>
						 <input type="time" class="form-control" id="ptime" name="ptime" onfocus="checkval(id)" onblur="actval(id)">
						</div>
						<div class="form group col-xs-5">
						 <label class="control-label col-sm-6" for="dtime" >No. of hours:</label>
						 <input type="number" class="form-control" id="nhrs" value="2"  name="nhrs" min="2" max="24" onfocus="checkval(id)" onblur="actval(id)" oninput="estprc(id,'eprice')">
						</div>
                    </div>
				 </div>
				 <div class="form-group col-lg-10 col-md-offset-1">
				 </br>
			     <label class="control-label"> Pick up Address:</label>
					<input type="text" class="form-control" id="paddress" name="paddress " placeholder="Enter Address" onfocus="checkval(id)" onblur="actval(id)">
				 </div>
				 
				 <div class="form-group cninp col-xs-5 col-md-offset-2">
					<label class="control-label"> Contact-no: </label>
					<input type="number" class="form-control" id="no" name="no" placeholder="Enter Contact Number" onfocus="checkval(id)" onblur="actval(id);chkno()">
				 </div>
				 <div class="form-group epinp col-xs-3 col-md-offset-4">
					<label class="control-label"> Estimated Price: </label>
					<input type="text" class="form-control" value="<?php echo $_GET['rs']; ?>" id="eprice" name="eprice" value="" readonly>
				 </div>
				 
				 <div class="form-group">
				 <div class="col-md-6 col-md-offset-3 bkbtn">
				 <input type="submit" class="btn btn-success" value="Confirm booking">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			      <input type="button" class="btn btn-success" value="Cancel Booking" onclick="return cancelb()">
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