<?php
	$type=$_REQUEST['type'];
	$charge=$_REQUEST['charge'];
	$capacity=$_REQUEST['capacity'];
	$description=$_REQUEST['description'];
	$status=$_REQUEST['status'];
	include("connection.php");
	$str="insert into bed (type,charge,description,capacity,status,avail)"."values ('$type','$charge','$description','$capacity','$status','$capacity')";
	$result=mysqli_query($con,$str);
	if($result){
		echo "succesfully registered";
	}
	else{
		echo "error".mysqli_error($con);
	}
?>
