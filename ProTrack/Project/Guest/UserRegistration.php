<?php
include("../Assets/Connection/Connection.php");

	if(isset($_POST["Submit"]))
	{
		$name=$_POST["name"];
		$email=$_POST["email"];
		$password=$_POST["password"];
		$district=$_POST["district"];
		$place=$_POST["place"];
		$photo=$_FILES["photo"]["name"];
		$temp=$_FILES["photo"]["tmp_name"];
		move_uploaded_file($temp,"../Assets/files/user/.$photo");
		$insQry="insert into tbl_user(user_name,user_email,user_password,place_id,user_photo) values('".$name."','".$email."','".$password."','".$place."','".$photo."')";
		if($con->query($insQry)){
			echo "Inserted";
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
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="288" border="1">
    <tr>
      <td width="136">Name</td>
      <td width="136"><label for="name"></label>
        <input type="text" name="name" id="name" />
    </tr>
    <tr>
      <td>Email</td>
      <td><label for="email"></label>
      <input type="text" name="email" id="email" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label for="password"></label>
      <input type="text" name="password" id="password" /></td>
    </tr>
    <tr>
      <td>District</td>
      <td><label for="district"></label>
        <select name="district" id="district" onchange="getPlace(this.value)">
        <option>Select</option>
        <?php
		$SelQry1="select * from tbl_district";
		$resultOne=$con->query($SelQry1);
		while($data=$resultOne->fetch_assoc())
		{
		?>
      <option value="<?php echo $data["district_id"]?>">
      <?php echo $data["district_name"]; ?>
      
      </option>
      <?php
		}
		?> 
      </select></td>
    </tr>
    <tr>
      <td>Place</td>
      <td><label for="place"></label>
        <select name="place" id="sel_place">
        <option>------SELECT--------</option>
       
      </select></td>
    </tr>
    <tr>
      <td>Photo</td>
      <td><label for="photo"></label>
      <input type="file" name="photo" id="photo" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" id="Submit" value="Submit" />
        <input name="Cancel" type="submit" id="Cancel" value="Cancel" />
      </div></td>
    </tr>
  </table>
</form>	
</body>
</html>
 <script src="../Assets/JQ/jQuery.js"></script>
<script>
  function getPlace(did) {
    $.ajax({
      url: "../Assets/AjaxPages/AjaxPlace.php?did=" + did,
      success: function (result) {

        $("#sel_place").html(result);
      }
    });
  }

</script>