<?php
	include 'connection.php';	
	if(isset($_GET['cty']))
	{
		if(isset($_GET['li']))
		{
			$sql="INSERT INTO booking_details(location) VALUES('$_GET[cty]');";
			mysqli_query($conn,$sql);
			echo "<script> window.location.href='http://localhost/Vehicle Hiring System/car_details.php?lo=hidden&li=visible'; </script>";
		}
		else
		{
			$sql="SELECT * FROM booking_details;";
			$result=mysqli_query($conn,$sql);
			$resultCheck=mysqli_num_rows($result);
			$sql="UPDATE booking_details set location='$_GET[cty]' WHERE sno='$resultCheck';";
			mysqli_query($conn,$sql);
			echo "<script> window.location.href='http://localhost/Vehicle Hiring System/car_details.php?lo=visible&li=hidden'; </script>";
		}
	}
	if(isset($_GET['car']))
	{
		
		$sql="SELECT * FROM booking_details;";
		$result=mysqli_query($conn,$sql);
		$resultCheck=mysqli_num_rows($result);
		$sql="UPDATE booking_details set car='$_GET[car]' WHERE sno='$resultCheck';";
		mysqli_query($conn,$sql);
		if(isset($_GET['pg']))
			echo "<script> window.location.href='http://localhost/Vehicle Hiring System/login.php?pg=b&rs=$_GET[rs]&ex=$_GET[ex]'; </script>";
		else
			echo "<script> window.location.href='http://localhost/Vehicle Hiring System/book.php?lo=visible&rs=$_GET[rs]&ex=$_GET[ex]'; </script>";
	}
	if(isset($_GET['pdate']))
	{
		$sql="SELECT * FROM booking_details;";
		$result=mysqli_query($conn,$sql);
		$resultCheck=mysqli_num_rows($result);
		$sql="UPDATE booking_details set pickup_date='$_GET[pdate]', pickup_time='$_GET[ptime]', hours='$_GET[nhrs]', address='$_GET[padd]', contact_no='$_GET[no]' WHERE sno='$resultCheck';";
		mysqli_query($conn,$sql);
		echo "<script> window.location.href='http://localhost/Vehicle Hiring System/payment.php?ep=$_GET[ep]'; </script>";
	}
	if(isset($_GET['lo']))
	{
		$sql="SELECT * FROM booking_details;";
		$result=mysqli_query($conn,$sql);
		$resultCheck=mysqli_num_rows($result);
		$sn=$resultCheck-1;
		$sql="SELECT * FROM booking_details WHERE sno='$resultCheck';";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($result);
		if($row['location']==null || $row['car']==null || $row['pickup_date']==null)
		{
			$sql="DELETE FROM booking_details WHERE sno='$resultCheck';";
			mysqli_query($conn,$sql);
			$sql="ALTER TABLE booking_details AUTO_INCREMENT=$sn;";
			mysqli_query($conn,$sql);
			echo "<script> window.location.href='http://localhost/Vehicle Hiring System/location.php?lo=hidden&li=visible'; </script>";
		}
		else
		{
			$sql="UPDATE booking_details SET pickup_date=null WHERE sno='$resultCheck';";
			mysqli_query($conn,$sql);
			echo "<script> window.location.href='http://localhost/Vehicle Hiring System/location.php?lo=visible&li=hidden'; </script>";
		}
	}
?>