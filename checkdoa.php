<?php
	$doa=$_REQUEST['doa'];
	include("connection.php");
	$str2="select doa from admission where doa='$doa';";
	$res=mysqli_query($con,$str2);
	$num=mysqli_num_rows($res);
	if($res && $num>0){
		echo "Doa registered";
	}
	else
	{
		echo "There is no such appointment on the entered date";
	}
?>
