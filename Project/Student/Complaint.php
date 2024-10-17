<?php
include("../Assets/connection/connection.php");
session_start();

$sid=$_SESSION['sid'];
$selQry="select * from tbl_student where student_id='".$sid."'";
$result=$con->query($selQry);
$data=$result->fetch_assoc();

if(isset($_POST["submit"]))
	{
		$title=$_POST["title"];
		$content=$_POST["content"];
		$name=$data["student_name"];
		
		$insQry="insert into tbl_complaint(complaint_title,complaint_content,complaint_date,user_name) values('".$title."','".$content."',CURDATE(),'".$name."')";
		if($con->query($insQry)){
			echo "Inserted";
		}
		
	}



?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Complaint Form</title>
</head>
<body align="center">

  <h2>Complaint Form</h2>

  <form id="form1" name="form1" method="post" action="">
    <table align="center" width="200" border="1">
      <tr>
        <td width="87">Title</td>
        <td width="97"><input name ="title" type="text" id="title" placeholder="Enter title"></td>
      </tr>
      <tr>
        <td width="87">Content</td>
        <td width="97"><textarea name ="content"  id="content" placeholder="Enter content"></textarea></td>
      </tr>
      <tr>
        <td> <input type="submit" name="submit" id="submit" value="Submit"></td>
      </tr>

    </table>
  </form>

</body>
</html>