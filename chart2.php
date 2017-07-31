<?php
	header('Content-Type:application/json');
	include("connection.php");
	$str="SELECT  DISTINCT(doa), COUNT(*)count FROM    admission WHERE   doa BETWEEN CURDATE() - INTERVAL 15 DAY AND CURDATE() GROUP BY doa";
	$result=mysqli_query($con,$str);
	$data=array();
	foreach ($result as $row) {
		$data[]=$row;
	}
	echo json_encode($data);
?>
