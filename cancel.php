<?php
	$email=$_REQUEST['email'];
	include("connection.php");
	$str="delete from users where email='$email';";
	$result=mysqli_query($con,$str);
	if($result){
		echo "Success";
	}
?>