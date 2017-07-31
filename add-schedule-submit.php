<?php
	$name=$_REQUEST['name'];
	$days=$_REQUEST['days'];
	$stime=$_REQUEST['stime'];
	$etime=$_REQUEST['etime'];
	$pptime=$_REQUEST['pptime'];
	$serial=$_REQUEST['serial'];
	$status=$_REQUEST['status'];
	include("connection.php");
	$str="insert into schedule (dname,adays,stime,etime,pptime,serial,status)"."values ('$name','$days','$stime','$etime','$pptime','$serial','$status')";
	$result=mysqli_query($con,$str);
	if($result){
		echo "succesfully registered";
	}
	else{
		echo "error".mysqli_error($con);
	}
?>
