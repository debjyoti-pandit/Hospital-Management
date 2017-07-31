<?php
  $id=$_REQUEST['id'];
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
  $mobile=$_REQUEST['mobile'];
	$enquiry=$_REQUEST['enquiry'];
	$date=$_REQUEST['date'];
  $sdate=$_REQUEST['sdate'];
	$status=$_REQUEST['status'];
  $btnu=$_REQUEST['btnu'];
	include("connection.php");
	if($btnu=="Update"){
  $str="update enquiry set
  name='$name',email='$email',mobile='$mobile', enquiry='$enquiry',date='$date',sdate='$sdate',status='$status' where id=$id";
      $result=mysqli_query($con,$str);
      if($result){
        header("location:e.php");
      }
      else{
        echo "Error Occoured".mysqli_error($con);
      }
    }
