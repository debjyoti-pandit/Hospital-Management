<?php
$id=$_REQUEST['id'];
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$mobile=$_REQUEST['mobile'];
$phone=$_REQUEST['phone'];
$sex=$_REQUEST['sex'];
$dob=$_REQUEST['dob'];
$blood_group=$_REQUEST['blood_group'];
$address=$_REQUEST['address'];
$designation=$_REQUEST['designation'];
$department=$_REQUEST['department'];
$specialist=$_REQUEST['specialist'];
$qualification=$_REQUEST['qualification'];
$doj=$_REQUEST['doj'];
$status=$_REQUEST['status'];
$btnud=$_REQUEST['btnud'];

	include("connection.php");
	if($btnud=="Update"){

$str="update doctor set name='$name',email='$email',mobile='$mobile',phone='phone',sex='$sex',dob='$dob',blood_group='$blood_group',address='$address',designation='$designation',department='$department',specialist='$specialist',qualification='$qualification',doj='$doj',status='$status' where id=$id";
    //$str="update doctor set name='$name',contact='$contact', address='$address',gender='$gender', qf='$qf' where id=$id";
		$result=mysqli_query($con,$str);
		if($result){
			header("location:doctor-list.php");
		}
		else{
			echo "Error Occoured".mysqli_error($con);
		}
	}
	else if($btnud=="Delete"){
		$str="delete from doctor where id=$id";
		$result=mysqli_query($con,$str);
		if($result){
			header("location:doctor-list.php");
		}
		else{
			echo "Error Occoured".mysqli_error($con);
		}

	}

?>
