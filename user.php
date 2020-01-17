<?php
	include 'connection.php';
	$dlno=$_POST['dl'];
	$emid=$_POST['email'];
	$pwd=password_hash($_POST['pswd'],PASSWORD_DEFAULT);
	$sql="INSERT INTO users(dl_no,email_id,password) VALUES('$dlno','$emid','$pwd');";	
	if(mysqli_query($conn,$sql))
	{
		echo "<script>alert('Signed up successfully');</script>";
		echo "<script>window.location.href='http://localhost/Vehicle Hiring System/login.php?pg=h&rs=0&ex=0';</script>";
	}
	else
		echo "<script>alert('Email already taken');</script>";
		echo "<script>window.location.href='http://localhost/Vehicle Hiring System/signup.php?dlnum=$dlno';</script>";
?>