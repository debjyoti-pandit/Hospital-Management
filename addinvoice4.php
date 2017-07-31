<?php
	$id=$_REQUEST['id'];
	$email=$_REQUEST['email'];
	$paid=$_REQUEST['paid'];
	$tp=$_REQUEST['p'];
	$due=$_REQUEST['due'];
	$date=$_REQUEST['date'];
	$tp+=$paid;
	include("connection.php");
  if($due<=0){
    $str2="UPDATE `admission` SET `status` = 'inactive' WHERE `admission`.`id` = $id;";
    $result2= mysqli_query($con, $str2);
		header("location:page5.php");
  }
		$str="UPDATE `admission` SET `paid` = '$tp', `due` = '$due' WHERE `admission`.`id` = $id;";
	  $result= mysqli_query($con, $str);
		if($result){
			$str3="select * from patient where email='$email'";
			$res3=mysqli_query($con,$str3);
			$row3=mysqli_fetch_array($res3,MYSQLI_ASSOC);
			$pid=$row3['id'];
			$reason="Invoice";
			$str4="INSERT INTO `expenses` (`pid`, `credit`, `debit`, `date`, `reason`) VALUES ($pid, '$paid',NULL, '$date', '$reason');";
			$qr=mysqli_query($con, $str4);
			$str5="INSERT INTO `paid` (`id`, `pid`, `aid`, `paid` , `date`) VALUES (NULL, $pid, '$id', '$paid','$date');";
			$res5=mysqli_query($con,$str5);
			header("location:page5.php");
		}
		else{
			echo "error:-".mysqli_error($con);
		}

?>
