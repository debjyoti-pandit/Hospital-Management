<?php
	$id=$_REQUEST['id'];
	require("connection.php");
    $str="select * from bed where id=$id;";
    $result= mysqli_query($con, $str);
    $row= mysqli_fetch_array($result,MYSQLI_ASSOC);
    $cost=$row['charge'];
    $reason=$row['type']." type bed purchased";
    $c=$row['capacity']+1;
    $a=$row['avail']+1;
    $str2="UPDATE `bed` SET `capacity` = '$c', `avail` = '$a' WHERE `bed`.`id` = $id;";
    $res= mysqli_query($con, $str2);
    $str3="INSERT INTO `expenses` (`id`, `credit`, `debit`, `date`, `reason`) VALUES (NULL, NULL, '$cost', CURRENT_DATE(), '$reason');";
    $r=mysqli_query($con, $str3);
    echo "Sucessfully Increased. Please refresh the page to see change."
?>