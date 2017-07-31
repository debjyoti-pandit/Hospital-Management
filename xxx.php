<?php 
session_start();
$email=$_SESSION['email'];
$_SESSION['email']="";
$password=$_SESSION['password'];
$_SESSION['password']="";
$a = array('email' => $email,'password' => $password );
echo json_encode($a);
?>