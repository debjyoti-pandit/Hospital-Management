<?php 
	$email=$_REQUEST['email'];
	include("connection.php");
	$str2="select email from patient where email='$email'";
	$res=mysqli_query($con,$str2);
	$num=mysqli_num_rows($res);
	if($res && $num>0){
		echo "Email registered";
	}
	else
	{
		echo "Email not registered";
	}
?>