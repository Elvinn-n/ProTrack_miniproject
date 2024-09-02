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
</head>
<body>

<h2>Login Form</h2>

<form name="form1" method="post" action="">
  <table width="242" border="1">
    <tr>
      <td width="128">Email</td>
      <td width="98"><label for="txt_email"></label>
      <input type="text" name="txt_email" id="txt_email"></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label for="txt_password"></label>
      <input type="password" name="txt_password" id="txt_password"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="btn_login" id="btn_login" value="Login"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><a href="Coach.php">NewCoach</a>/<a href="Student.php">NewStudent</a></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>