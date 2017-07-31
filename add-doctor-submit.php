<?php
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$mobile=$_REQUEST['mobile'];
	$phone=$_REQUEST['phone'];
	$sex=$_REQUEST['sex'];
	$dob=$_REQUEST['dob'];
	$blood_group=$_REQUEST['blood_group'];
	$address=$_REQUEST['address'];
	$designation=$_REQUEST['designation'];
	$department=$_REQUEST['department'];
	$specialist=$_REQUEST['specialist'];
	$qualification=$_REQUEST['qualification'];
	$doj=$_REQUEST['doj'];
	$status=$_REQUEST['status'];
	include("connection.php");
	$str="insert into doctor (name,email,mobile,phone,sex,dob,blood_group,address,designation,department,specialist,qualification,doj,status)"."values ('$name','$email','$mobile','$phone','$sex','$dob','$blood_group','$address','$designation','$department','$specialist','$qualification','$doj' ,'$status')";
	$result=mysqli_query($con,$str);
	if($result){
		$str1="insert into users (email,password,role)"."values ('$email','123','Doctor')";
		$result1=mysqli_query($con,$str1);
		echo "Succesfully registered";
	}
	else{
		echo "Please fill the form correctly.";
	}
?>
