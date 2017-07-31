<?php
	$email=$_REQUEST['email'];
	$password=$_REQUEST['password'];
	$role=$_REQUEST['role'];
	include("connection.php");
	$str="insert into users (email,password,role)"."values ('$email','$password','$role')";
	$result=mysqli_query($con,$str);
	
	if($result){
		session_start();
		$_SESSION['email']=$email;
		$_SESSION['password']=$password;
		if($role=="Patient"){
			header("location:register-third-patient.php");
		}
		elseif ($role=="Admin") {
			header("location:register-third-admin.php");
		}
		elseif ($role="Doctor") {
			header("location:register-third-doctor.php");
		}elseif ($role="Staff") {
			header("location:register-third-patient.php");
		}
	}
	else{
		echo "error".mysqli_error($con);
	}
?>
