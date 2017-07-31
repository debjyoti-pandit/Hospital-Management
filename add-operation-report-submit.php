<?php
	$name=$_REQUEST['name'];
	$doctor=$_REQUEST['doctor'];
	$description=$_REQUEST['description'];
	$title=$_REQUEST['title'];
	$sex=$_REQUEST['sex'];
	$dob=$_REQUEST['dob'];
	$status=$_REQUEST['status'];
	include("connection.php");
	$str="insert into operation (pname,sex,doo,title,description,doctor,status)"."values ('$name','$sex','$dob','$title','$description','$doctor','$status')";
	$result=mysqli_query($con,$str);
	if($result){
		echo "succesfully registered";
	}
	else{
		echo "error".mysqli_error($con);
	}
?>
