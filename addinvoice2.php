<?php
	$email=$_REQUEST['email'];
	$doctor=$_REQUEST['doctor'];
	$doa=$_REQUEST['doa'];
  //echo "$email+$doctor+$doa";
	include("connection.php");
	$str="select * from admission where email='$email' and doa='$doa' and dname='$doctor' and status='active';";
	$result=mysqli_query($con,$str);
	$num=mysqli_num_rows($result);
	if($result  && $num>0){
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		$a=$row['id'];
		echo "$a";
	}
	else{
		echo "failure";
	}
?>
