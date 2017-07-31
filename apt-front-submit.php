<?php
	$email=$_REQUEST['email'];
	$dname=$_REQUEST['dname'];
	$doctor=$_REQUEST['doctor'];
	$adate=$_REQUEST['adate'];
	$prob=$_REQUEST['prob'];
	echo $email.$dname.$doctor;
	include("connection.php");
	$str2="select id,firstname from patient where email='$email'";
	$res=mysqli_query($con,$str2);
	$num=mysqli_num_rows($res);
	if($res && $num>0){
		$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
		$pid=$row['id'];
		$pname=$row['firstname'];
		$str="insert into appointment (pid,pname,dname,doctor,date,problem)"."values ('$pid','$pname','$dname','$doctor','$adate','$prob')";
		$result=mysqli_query($con,$str);
		if($result){
			echo "succesfully registered";
		}
		else{
			echo "error".mysqli_error($con);
		}
	}
	else{
		echo "Email Id Not Registered";
	}
?>
