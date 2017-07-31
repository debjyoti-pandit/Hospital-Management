<?php
	$dname=$_REQUEST['name'];
	$des=$_REQUEST['des'];
	$status=$_REQUEST['status'];
	include("connection.php");
	$str="insert into department (dname,description,status)"."values ('$dname','$des','$status')";
	$result=mysqli_query($con,$str);
	if($result){
		echo "succesfully registered";
	}
	else{
		echo "error".mysqli_error($con);
	}
?>
