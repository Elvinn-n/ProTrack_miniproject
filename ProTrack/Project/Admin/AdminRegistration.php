<?php
include("../Assets/connection/connection.php");
	if(isset($_POST["submit"]))
	{
		$name=$_POST["name"];
		$email=$_POST["email"];
		$password=$_POST["password"];
		$insQry="insert into tbl_admin(admin_name,admin_email,admin_password)values('".$name."','".$email."','".$password."')";
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Form</title>
</head>
<body>
    <h1>User Registration Form</h1>
    
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>

        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>