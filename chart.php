<?php
	header('Content-Type:application/json');
	include("connection.php");
	$str="SELECT  DISTINCT(date), COUNT(*)count FROM    appointment 
	WHERE   date BETWEEN CURDATE() - INTERVAL 15 DAY AND CURDATE() + INTERVAL 15 DAY GROUP BY date;";
	$result=mysqli_query($con,$str);
	$data=array();
	foreach ($result as $row) {
		$data[]=$row;
	}
	echo json_encode($data);
?>