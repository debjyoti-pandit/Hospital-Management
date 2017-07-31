<?php
	$type=$_REQUEST['type'];
	$name=$_REQUEST['name'];
	$doa=$_REQUEST['doa'];
	$description=$_REQUEST['description'];
	$dod=$_REQUEST['dod'];
	$doctor=$_REQUEST['doctor'];
	include("connection.php");
	$str1="SELECT * from bed where type='$type'";
	$result=mysqli_query($con,$str1);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	$a=$row['avail'];
	$amt=$row['charge'];
	if($a>0){
		$str2="SELECT fee from doctor where name='$doctor'";
		$res2=mysqli_query($con,$str2);
		$r=mysqli_fetch_array($res2,MYSQLI_ASSOC);
		$damt=$r['fee'];
		$str="INSERT INTO `admission` (`email`, `dname`, `dfee`, `bfee`, `path`, `medi`, `hoscharge`, `labtestfee`, `doa`, `status`, `total`, `bedcost`,`paid`, `due`,`bedtype`,`dod`,`description`,`doccost`)
			VALUES ( '$name', '$doctor', '0', '0', '0', '0', '2000', '0',  '$doa', 'active', '0', '$amt','0', '0','$type','$dod','$description','$damt');";
		$res=mysqli_query($con,$str);
		
		if($res){
			echo "Succesfully Admitted";
		}
		else{
			echo "Problem facing during assingning";
		}
	}
	else{
		echo "Bed Not available of this type";
	}
?>
