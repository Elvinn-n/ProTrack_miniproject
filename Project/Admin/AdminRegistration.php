<?php
include("../Assets/Connection/Connection.php");
$name="";
$email="";
$password="";
$aid=0;

if(isset($_POST["btn_submit"]))
{
	$name=$_POST["txt_name"];
	$email=$_POST["txt_email"];
	$password=$_POST["txt_password"];
	$aid=$_POST["txt_aid"];
	if($aid==0)
	{
		$insQry="insert into tbl_admin(admin_name,admin_email,admin_password) values('".$name."','".$email."','".$password."')";
		echo $insQry;
		if($con->query($insQry))
		{
		echo "inserted";
		}
	}
	else
	{
		$upQry="update tbl_admin set admin_name='".$name."',admin_email='".$email."',admin_password='".$password."' where admin_id=".$aid;
		if($con->query($upQry))
		{
			$aid=0;
			echo "updated";
		}
	}
}
if(isset($_GET["did"]))
{	
	$did=$_GET["did"];
	$delQry="delete from tbl_admin where admin_id=".$did;
	if($con->query($delQry))
	{
		?>
		<script>
		window.location="AdminRegistration.php";
		</script>
		<?php
	}
}
if(isset($_GET["eid"]))
{	
	$eid=$_GET["eid"];
	$selQryOne="select * from tbl_admin where admin_id=".$eid;
	$resultOne=$con->query($selQryOne);
	$dataOne=$resultOne->fetch_assoc();
	$name=$dataOne["admin_name"];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Registration</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
<table width="200" border="1">
  <tr>
    <td>Name </td>
    <td><label for="txt_name"></label>
    <input type="text" name="txt_name" id="txt_name" value="<?php echo  $name;?>"/>
    <input type="hidden" name="txt_aid" value="<?php echo $aid;?>"/></td>
  </tr>
  <tr>
    <td>Email</td>
    <td>
      <label for="txt_email"></label>
      <input type="text" name="txt_email" id="txt_email" value="<?php echo  $email;?>" />
   </td>
  </tr>
  <tr>
    <td>Password</td>
    <td>
    <label for="txt_password"></label>
      <input type="text" name="txt_password" id="txt_password" value="<?php echo $password;?>"/></td>
  </tr>
  <tr>
    <td colspan="2">
      <div align="center">
        <input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
        <input type="submit" name="btn_cancel" id="btn_cancel" value="Cancel" />
      </div>
   </td>
  </tr>
</table>
</form>
  <table width="200" border="1">
    <tr>
      <td>SiNo</td>
      <td>Name</td>
      <td>Email</td>
      <td>Password</td>
      <td>Action</td>
    </tr>
    <?php
    $selQry="Select *from tbl_admin";
    $result=$con->query($selQry);
    $i=0;
    while($data=$result->fetch_assoc())
    {
    $i++;
   ?>
    <tr>
      <td>
     <?php
   ?>
      </td>
      <td><?php
    echo $data["admin_name"];
   ?>
      </td>
      <td>
    <?php
    echo $data["admin_email"];
   ?>	
      </td>
      <td>
       <?php
    echo $data["admin_password"];
   ?>
      </td>
      <td>
      <a href="AdminRegistration.php?did=<?php echo $data["admin_id"];?>">Delete</a> 
      <a href="AdminRegistration.php?eid=<?php echo $data["admin_id"];?>">Edit</a></td>
    </tr>
    <?php
    }
   ?>
  </table>
</body>
</html>