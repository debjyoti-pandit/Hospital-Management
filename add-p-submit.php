<?php
	$lname=$_REQUEST['lname'];
	$email=$_REQUEST['email'];
	$mobile=$_REQUEST['mobile'];
	$fname=$_REQUEST['fname'];
	$sex=$_REQUEST['sex'];
	$blood_group=$_REQUEST['blood_group'];
	$address=$_REQUEST['address'];
	include("connection.php");
	$str="insert into patient (lastname,email,mobile,firstname,sex,blood_group,address)"."values ('$lname','$email','$mobile','$fname','$sex','$blood_group','$address')";
	$result=mysqli_query($con,$str);
	if($result){
		$str1="insert into users (email,password,role)"."values ('$email','123','Patient')";
		$result1=mysqli_query($con,$str1);
		echo "succesfully registered";
	}
	else{
		echo "error".mysqli_error($con);
	}
?>
