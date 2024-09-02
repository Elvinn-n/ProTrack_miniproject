<?php
include("../Assets/connection/connection.php");
	if(isset($_POST["submit"]))
	{
		$name=$_POST["txt_name"];
		$email=$_POST["txt_email"];
		$password=$_POST["txt_password"];
		$address=$_POST["txt_address"];
		
		
		$photo=$_FILES["photo"]['name'];
		$path=$_FILES['photo']['tmp_name'];
		move_uploaded_file($path,'../Assets/files/Coach/'.$photo);
		
		$proof=$_FILES["proof"]['name'];
		$path=$_FILES['proof']['tmp_name'];
		move_uploaded_file($path,'../Assets/files/Coach/'.$proof);
		
		$insQry="insert into tbl_coach(coach_name,coach_email,coach_password,coach_address,coach_proof,coach_photo)values('".$name."','".$email."','".$password."','".$address."','".$proof."','".$photo."')";
		if($con->query($insQry))
		{
			echo "inserted";	
		}
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<a href="HomePage.php">Home</a>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="200" border="1" align="center">
    <tr>
      <td>Name</td>
      <td>
      <input type="text" name="txt_name" id="txt_name" /></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label for="txt_email"></label>
      <input type="text" name="txt_email" id="txt_email" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label for="txt_password"></label>
      <input type="password" name="txt_password" id="txt_password" /></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><label for="txt_address"></label>
      <textarea name="txt_address" id="txt_address" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>Photo</td>
      <td><label for="proof"></label>
      <input type="file" name="photo" id="photo" /></td>
    </tr>
    
    <tr>
      <td>Proof</td>
      <td><label for="proof"></label>
      <input type="file" name="proof" id="proof" /></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="submit" id="submit" value="Submit" /></td>
    </tr>
  </table>
</form>
</body>
</html>
