<?php
	$email=$_REQUEST['email'];
	$password=$_REQUEST['password'];
	$role=$_REQUEST['role'];
	include("connection.php");
	$str="select * from users where email='$email' and password='$password' and role='$role'";
	$result=mysqli_query($con,$str);
	$num=mysqli_num_rows($result);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	if($result){
		if(($row['email']==$email)&&($row['password']==$password)&&($row['role']=="Admin")){
			session_start();
			$_SESSION['email'] = $email;
			$_SESSION['role'] = $role;
			echo "admin";

		}
		elseif (($row['email']==$email)&&($row['password']==$password)&&($row['role']=="Patient")) {
			session_start();
			$_SESSION['email'] = $email;
			$_SESSION['role'] = $role;
			echo "patient";
		}
		elseif (($row['email']==$email)&&($row['password']==$password)&&($row['role']=="Doctor")) {
			session_start();
			$_SESSION['email'] = $email;
			$_SESSION['role'] = $role;
			echo "doctor";
		}
		elseif (($row['email']==$email)&&($row['password']==$password)&&($row['role']=="Receptionists")) {
			session_start();
			$_SESSION['email'] = $email;
			$_SESSION['role'] = $role;
			echo "Receptionists";
		}
		else
		{
			echo "m";
			//header("location:login.php");
		}
	}
	else{
		echo "error".mysqli_error($con);
	}

?>
