<?php
$firstname=$_REQUEST['firstname'];
$lastname=$_REQUEST['lastname'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$mobile=$_REQUEST['mobile'];
$phone=$_REQUEST['phone'];
$sex=$_REQUEST['sex'];
$dob=$_REQUEST['dob'];
$blood_group=$_REQUEST['blood_group'];
$address=$_REQUEST['address'];
$doa=$_REQUEST['doa'];
$status=$_REQUEST['status'];
//echo "$status"."$doa";
include("connection.php");
$str="UPDATE `admin` SET `password` = '$password', `firstname` = '$firstname', `lastname` = '$lastname', `sex` = '$sex', `address` = '$address', `doa` = '$doa', `dob` = '$dob', `mobile` = '$mobile', `phone` = '$phone', `status` = '$status' WHERE `admin`.`email` = '$email';";
$result=mysqli_query($con,$str);
if($result){
	echo "Successfully Updated Data";
}
else{
	echo "Failed to update data";
}
?>
