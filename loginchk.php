<?php
	include 'connection.php';	
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$sql="SELECT * FROM users WHERE email_id='$email';";
	$result=mysqli_query($conn,$sql);
	$resultCheck=mysqli_num_rows($result);
	if($resultCheck==0)
	{
		echo "<script> alert('Invalid Email'); </script>";
		if($_GET['pg']=='b')
		{
			$rs=$_GET['rs'];
			$ex=$_GET['ex'];
			echo "<script> window.location.href='http://localhost/Vehicle Hiring System/login.php?pg=b&rs=$rs&ex=$ex'; </script>";
		}
		else
			echo "<script> window.location.href='http://localhost/Vehicle Hiring System/login.php?pg=h&rs=0&ex=0'; </script>";
	}
	else
	{
		$row=mysqli_fetch_assoc($result);
		if(password_verify($pass,$row['password']))
		{
			$dlno=$row['dl_no'];
			$sql="SELECT * FROM dl_verification WHERE dl_no='$dlno';";
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_assoc($result);
			$name=$row['fname']." ".$row['lname'];
			$sql="SELECT * FROM booking_details;";
			$result=mysqli_query($conn,$sql);
			$resultCheck=mysqli_num_rows($result);
			$sql="SELECT * FROM booking_details WHERE sno='$resultCheck';";
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_assoc($result);
			if($row['name']==NULL)
			{
				$sql="UPDATE booking_details SET name='$name' WHERE sno='$resultCheck';";
				mysqli_query($conn,$sql);
			}
			else
			{
				$sql="INSERT INTO booking_details(name) VALUES ('$name');";
				mysqli_query($conn,$sql);
			}
			if($_GET['pg']=='b')
			{
				$rs=$_GET['rs'];
				$ex=$_GET['ex'];
				if($rs==0 && $ex==0)
					echo "<script> window.location.href='http://localhost/Vehicle Hiring System/car_details.php?lo=visible&li=hidden'; </script>";
				else
					echo "<script> window.location.href='http://localhost/Vehicle Hiring System/book.php?lo=visible&rs=$rs&ex=$ex'; </script>";
			}
			else
				echo "<script> window.location.href='http://localhost/Vehicle Hiring System/location.php?lo=visible&li=hidden'; </script>";
		}
		else
		{
			if($_GET['pg']=='b')
			{
				$rs=$_GET['rs'];
				$ex=$_GET['ex'];
				echo "<script> alert('Password not matched'); window.location.href='http://localhost/Vehicle Hiring System/login.php?pg=b&rs=$rs&ex=$ex'; </script>";
			}
			else
				echo "<script> alert('Password not matched'); window.location.href='http://localhost/Vehicle Hiring System/login.php?pg=h&rs=0&ex=0'; </script>";
		}	
	}
?>