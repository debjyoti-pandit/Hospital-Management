<?php
	$name=$_REQUEST['name'];
	$doctor=$_REQUEST['doctor'];
	$description=$_REQUEST['description'];
	$title=$_REQUEST['title'];
	$sex=$_REQUEST['sex'];
	$dob=$_REQUEST['dob'];
	$tob=$_REQUEST['tob'];
	$status=$_REQUEST['status'];
	$cname=$_REQUEST['cname'];
	include("connection.php");
	$str="insert into birth (cname,pname,sex,dob,tob,title,description,doctor,status)"."values ('$cname','$name','$sex','$dob','$tob','$title','$description','$doctor','$status')";
	$result=mysqli_query($con,$str);
	if($result){
		echo "succesfully registered";
	}
	else{
		echo "error".mysqli_error($con);
	}
?>
