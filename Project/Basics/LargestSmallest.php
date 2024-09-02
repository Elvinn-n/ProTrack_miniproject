<?php
$result=0; 
$temp=0;
if(isset($_POST["btnFind"]))
	{	
		$n1=$_POST["txt_number1"];
		$n2=$_POST["txt_number2"];
		$n3=$_POST["txt_number3"];
		if($n1>$n2)
		{
			$temp=$n1;
		}
		else
		{
			$temp=$n2;
		}
		if($temp>$n3)
		{
			$largest=$temp;
		}
		else{
			$largest=$n3;		
			}
		
		
		if($n1<$n2)
		{
			$temp=$n1;
			}
		else
		{
			$temp=$n2;
			}
		if($temp<$n3)
		{
			$smallest=$temp;
		}
		else{
			$smallest=$n3;}
		

	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td>Number1</td>
      <td><label for="txt_number1"></label>
      <input type="text" name="txt_number1" id="txt_number1" /></td>
    </tr>
    <tr>
      <td>Number2</td>
      <td><label for="txt_number2"></label>
      <input type="text" name="txt_number2" id="txt_number2" /></td>
    </tr>
    <tr>
      <td>Number3</td>
      <td><label for="txt_number3"></label>
      <input type="text" name="txt_number3" id="txt_number3" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="btnFind" id="btnFind" value="Find" />
      </div></td>
    </tr>
    <tr>
      <td>Largest</td>
      <td>
	  	<?php
			echo $largest;  
      	?>
      </td>
    </tr>
     <tr>
      <td>Smallest</td>
      <td>
	  	<?php
			echo $smallest;  
      	?>
      </td>
    </tr>
  </table>
</form>
</body>
</html>