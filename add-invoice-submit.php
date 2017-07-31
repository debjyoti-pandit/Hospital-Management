<?php
	$email=$_REQUEST['email'];
	$date=$_REQUEST['date'];
	$total=$_REQUEST['total'];
	$vatpercent=$_REQUEST['vatpercent'];
	$vat=$_REQUEST['vat'];
	$discountpercent=$_REQUEST['discountpercent'];
	$discount=$_REQUEST['discount'];
	$grand=$_REQUEST['grand_total'];
	$paid=$_REQUEST['paid'];
	$due=$_REQUEST['due'];

	include("connection.php");
	$str2="select * from patient where email='$email'";
	$res=mysqli_query($con,$str2);
	$num=mysqli_num_rows($res);
	if($res && $num>0){
		$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
		$pid=$row['id'];
		$pd=$row['due'];
		$td=$pd+$due;
		$str3="UPDATE `patient` SET `due` = '$td' WHERE `patient`.`id` = $pid;";
		$r=mysqli_query($con,$str3);
		$str="INSERT INTO `bill` (`pid`, `date`, `total`, `vatp`, `vat`, `disp`, `dis`, `gt`, `paid`, `due`) VALUES ('$pid', '$date', '$total', '$vatpercent', '$vat', '$discountpercent', '$discount', '$grand', '$paid', '$due');";
		$result=mysqli_query($con,$str);
		if($result){
			$reason="Invoice";
			$str3="INSERT INTO `expenses` (`pid`, `credit`, `debit`, `date`, `reason`) VALUES ($pid, '$paid',NULL, '$date', '$reason');";
			
   			$qr=mysqli_query($con, $str3);
			header("location:add-invoice.php");
		}
		else {
			echo "error".mysqli_error($con);
		}
	}
	else{
		echo "Email Id not registered";
	}
?>
