<?php
include("../Assets/connection/connection.php");
	if(isset($_POST["submit"]))
	{
		$name=$_POST["name"];
		$email=$_POST["email"];
		$password=$_POST["password"];
		$insQry="insert into tbl_student(student_name,student_email,student_password)values('".$name."','".$email."','".$password."')";
		if($con->query($insQry))
		{
			echo "inserted";	
		}
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
</head>
<body>

<h2>Registration Form</h2>

<form action="" method="post">
  <div class="container">
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
	<input type="submit" value="submit" name="submit">
  </div>

  <div class="container">
    <p>Already have an account? <a href="#">Login</a>.</p>
  </div>
</form>

</body>
</html>