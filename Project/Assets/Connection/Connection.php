<?php
	$username="root";
	$server="localhost";
	$password="";
	$DB="db_speedygo";
		
	$con=mysqli_connect($server,$username,$password,$DB);
	if(!$con)
	{
		echo"Connection Failed";	
	}
	
?>