<?php
  $id=$_REQUEST['id'];
	$dname=$_REQUEST['dname'];
	$description=$_REQUEST['description'];
	$status=$_REQUEST['status'];
  $btnud=$_REQUEST['btnud'];
	include("connection.php");

if($btnud=="Update"){
  $str="update department set dname='$dname',description='$description',status='$status' where id=$id";
  $result=mysqli_query($con,$str);
  if($result){
    header("location:department-list.php");
  }
  else{
    echo "Error Occoured".mysqli_error($con);
  }
}
else if($btnud=="Delete"){
  $str="delete from department where id=$id";
  $result=mysqli_query($con,$str);
  if($result){
    header("location:department-list.php");
  }
  else{
    echo "Error Occoured".mysqli_error($con);
  }

}

?>
