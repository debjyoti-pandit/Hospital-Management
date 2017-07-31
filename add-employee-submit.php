<?php
	$lname=$_REQUEST['lname'];
	$email=$_REQUEST['email'];
	$mobile=$_REQUEST['mobile'];
	$fname=$_REQUEST['fname'];
	$sex=$_REQUEST['sex'];
	$dob=$_REQUEST['dob'];
	$blood_group=$_REQUEST['blood_group'];
	$address=$_REQUEST['address'];
	$role=$_REQUEST['role'];
	$status=$_REQUEST['status'];

	/*$picture_name=$_FILES['file','name'];
	$picture_size=$_FILES['file','size'];
	$picture_tmp=$_FILES['file','tmp'];
	*/
	/*if(isset($_REQUEST['module']) && $_REQUEST['module']=="a"){
		var_dump($_FILES);
	}*/
	include("connection.php");
	$str="insert into employee (lname,email,mobile,fname,sex,dob,blood_group,address,role,status)"."values ('$lname','$email','$mobile','$fname','$sex','$dob','$blood_group','$address','$role','$status')";
	$result=mysqli_query($con,$str);
	if($result){
		echo "succesfully registered";
	}
	else{
		echo "error".mysqli_error($con);
	}
?>
