<?php
include("../Assets/connection/connection.php");
session_start();
if(isset($_POST["btn_login"]))
	{

		$email=$_POST["txt_email"];
		$password=$_POST["txt_password"];
		
		
		$selQry="select * from tbl_coach where coach_email='".$email."' and coach_password='".$password."' and coach_status='1'";
		$result=$con->query($selQry);
		
		$selQry1="select * from tbl_student where student_email='".$email."' and student_password='".$password."'";
		$result1=$con->query($selQry1);
		
		$selQry2="select * from tbl_admin where admin_email='".$email."' and admin_password='".$password."'";
		$result2=$con->query($selQry2);
		
		if($row=$result->fetch_assoc())
		{
			$_SESSION['cid']=$row['coach_id'];
			$_SESSION['cname']=$row['coach_name'];
			header("location:../Coach/HomePage.php");
			
			
		}
		else if($row=$result1->fetch_assoc())
		{
			$_SESSION['sid']=$row['student_id'];
			$_SESSION['sname']=$row['student_name'];
			header("location:../Student/HomePage.php");
		}
		else if($row=$result2->fetch_assoc())
		{
			$_SESSION['aid']=$row['admin_id'];
			$_SESSION['adminname']=$row['admin_name'];
			header("location:../Admin/HomePage.php");
		}
		
		else
		{
			echo "Invalid Login";
		}
	}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <style>
      body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; /* Full viewport height */
    margin: 0;
}

form {
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    padding: 40px; /* Padding around the form */
    width: 400px; /* Fixed width for the form */
}

table {
    width: 100%; /* Full width of the form */
    border-collapse: collapse;
}

td {
    padding: 10px; /* Spacing within table cells */
}

label, /* Added to style labels */
input[type="text"],
input[type="password"] {
    font-size: 18px; /* Larger font size */
    font-weight: bold; /* Bolder text */
}

input[type="text"],
input[type="password"] {
    width: 100%; /* Full width of the input fields */
    padding: 10px; /* Padding inside input fields */
    border: 1px solid #ccc; /* Light border */
    border-radius: 4px; /* Rounded corners for input fields */
    box-sizing: border-box; /* Include padding in width */
}

input[type="submit"] {
    background-color: #007bff; /* Blue background for the button */
    color: white; /* White text */
    border: none; /* No border */
    border-radius: 4px; /* Rounded corners for button */
    padding: 10px; /* Padding inside button */
    cursor: pointer; /* Pointer cursor on hover */
    width: 100%; /* Full width of the button */
    font-size: 18px; /* Larger font size for button */
    font-weight: bold; /* Bolder text for button */
}

input[type="submit"]:hover {
    background-color: #0056b3; /* Darker blue on hover */
}

a {
    color: #007bff; /* Link color */
    text-decoration: none; /* No underline */
    font-size: 16px; /* Font size for links */
    font-weight: bold; /* Bolder text for links */
}

a:hover {
    text-decoration: underline; /* Underline on hover */
}

    </style>
</head>
<body>

<form name="form1" method="post" action="">
    <table>
        <tr>
            <td>Email</td>
            <td><input type="text" name="txt_email" id="txt_email"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="txt_password" id="txt_password"></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="btn_login" id="btn_login" value="Login">
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <a href="Coach.php">New Coach</a> / <a href="Student.php">New Student</a>
            </td>
        </tr>
    </table>
</form>
</body>
</html>

