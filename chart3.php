<?php
	header('Content-Type:application/json');
	include("connection.php");
	$str="SELECT DISTINCT(date),SUM(credit)credit,SUM(debit)debit FROM `expenses`GROUP BY date ORDER BY date DESC LIMIT 15";
	$result=mysqli_query($con,$str);
	$data=array();
	foreach ($result as $row) {
		$data[]=$row;
	}
	echo json_encode($data);
?>