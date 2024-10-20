<?php
include("../Assets/connection/connection.php");
session_start();
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Coach Homepage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5; /* Light gray background */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh; /* Full viewport height */
            margin: 0;
        }

        h1 {
            color: #333; /* Darker text for the header */
            font-size: 32px; /* Larger font size */
            margin-bottom: 20px; /* Space below the header */
        }

        form {
            background-color: #ffffff; /* White background for the form */
            border-radius: 8px; /* Rounded corners for the form */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            padding: 20px; /* Padding around the form */
            width: 300px; /* Fixed width for the form */
        }

        table {
            width: 100%; /* Full width of the form */
            border-collapse: collapse; /* Remove double borders */
        }

        td {
            padding: 15px; /* Spacing within table cells */
            text-align: center; /* Center text in cells */
        }

        a {
            color: #007bff; /* Blue link color */
            text-decoration: none; /* No underline */
            font-size: 18px; /* Font size for links */
            font-weight: bold; /* Bolder text for links */
        }

        a:hover {
            text-decoration: underline; /* Underline on hover for links */
        }
    </style>
</head>

<body align="center">
    <h1>WELCOME <?php echo $_SESSION['cname'] ?></h1>
    <form id="form1" name="form1" method="post" action="">
        <table align="center" width="200" border="1">
            <tr>
                <td><a href="MyProfile.php">Your Profile</a></td>
            </tr>
            <tr>
                <td><a href="../Guest/Login.php">Logout</a></td>
            </tr>
            <tr>
                <td><a href="ViewGame.php">View Game</a></td>
            </tr>
            <tr>
                <td><a href="Students.php">Students</a></td>
            </tr>
            <tr>
                <td><a href="Complaint.php">Complaints</a></td>
            </tr>
            <tr>
                <td><a href="Feedback.php">Feedback</a></td>
            </tr>
        </table>
    </form>
</body>
</html>
