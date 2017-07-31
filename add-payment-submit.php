<?php
	$name=$_REQUEST['name'];
	$date=$_REQUEST['date'];
	$payto=$_REQUEST['payto'];
	$description=$_REQUEST['description'];
	$amount=$_REQUEST['amount'];
	$status=$_REQUEST['status'];
	include("connection.php");
	$str="insert into payment (name,payto,description,date,amount,status)"."values ('$name','$payto','$description','$date','$amount','$status')";
	$result=mysqli_query($con,$str);
	if($result){
		if($status=="Paid"){
			$str3="INSERT INTO `expenses` (`id`, `credit`, `debit`, `date`, `reason`) VALUES (NULL, NULL ,'$amount', '$date', '$name');";
			
   			$qr=mysqli_query($con, $str3);
		}
		echo "succesfully registered";
	}
	else{
		echo "error".mysqli_error($con);
	}
?>
