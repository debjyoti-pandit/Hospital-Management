<?php
	$name=$_REQUEST['name'];
	$type=$_REQUEST['type'];
	$date=$_REQUEST['date'];
	$description=$_REQUEST['description'];
	$status=$_REQUEST['status'];
	include("connection.php");
	$str="insert into account (name,type,description,date,status)"."values ('$name','$type','$description','$date','$status')";
	$result=mysqli_query($con,$str);
	if($result){
		echo "succesfully registered";
	}
	else{
		echo "error".mysqli_error($con);
	}
?>
