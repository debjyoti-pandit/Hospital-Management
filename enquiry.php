<?php
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$date=$_REQUEST['date'];
	$mobile=$_REQUEST['mobile'];
	$enquiry=$_REQUEST['enquiry'];
  	$status='Pending';
	include("connection.php");
	$str="insert into enquiry (name,email,mobile,date,enquiry,status)"."values ('$name','$email','$mobile','$date','$enquiry','$status')";
	$result=mysqli_query($con,$str);
	if($result){
		echo "succesfully registered enquiry";
	}
	else{
		echo "error".mysqli_error($con);
	}
?>
