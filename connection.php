<?php
	$host        = "host = ec2-23-21-136-232.compute-1.amazonaws.com";
	$port        = "port = 5432";
	$dbname      = "dbname = d48hdnq2naa5rn";
	$credentials = "user = jbydjsonlnrlsy password=6f66a1ad66ccafbc96a854b5e73be06ed8ba51ee10696c77320733375b2cba21";
	$con=pg_connect( "$host $port $dbname $credentials"  ); or die("can't connect to database");
?>
