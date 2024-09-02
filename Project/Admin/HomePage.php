<?php
include("../Assets/connection/connection.php");
session_start();
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h1>WELCOME</h1>
<p><?php echo$_SESSION['adminname']?>
</p>
<p>&nbsp;</p>
<table width="200" border="1">
  <tr>
    <td><a href="AdminRegistration.php">AdminRegistration</a></td>
  </tr>
  <tr>
    <td><a href="CoachVerification.php">CoachVerification</a></td>
  </tr>
  <tr>
    <td><a href="CoachRegistration.php">CoachRegistration</a></td>
  </tr>
  <tr>
    <td><a href="Positions.php">Positions</a></td>
  </tr>
  <tr>
   <td><a href="Course.php">Course</a></td>
  </tr>
  <tr>
   <td><a href="AcademicYear.php">AcademicYear</a></td>
  </tr>
  <tr>
    <td><a href="StudentVerification.php">StudentVerification</a></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>