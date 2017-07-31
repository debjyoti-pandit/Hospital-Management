<?php
  $id=$_REQUEST['id'];
	$type=$_REQUEST['type'];
	$charge=$_REQUEST['charge'];
	$capacity=$_REQUEST['capacity'];
	$description=$_REQUEST['description'];
	$status=$_REQUEST['status'];
  $btnu=$_REQUEST['btnu'];
	include("connection.php");
	if($btnu=="Update"){
  $str="update bed set type='$type',description='$description',capacity='$capacity',charge='$charge',status='$status' where id=$id";
      $result=mysqli_query($con,$str);
      if($result){
        header("location:bed-list.php");
      }
      else{
        echo "Error Occoured".mysqli_error($con);
      }
    }
?>
