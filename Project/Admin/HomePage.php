<?php
include("../Assets/connection/connection.php");
session_start();
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admin Homepage</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f4f8; /* Soft background color */
            display: flex;
            flex-direction: column;
            align-items: center; /* Center items horizontally */
            justify-content: center; /* Center items vertically */
            min-height: 100vh; /* Full viewport height */
            margin: 0; /* Remove default margin */
        }

        h1 {
            color: #2c3e50; /* Darker color for the heading */
            font-size: 36px; /* Larger font size */
            margin-bottom: 10px; /* Space below the heading */
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
        }

        p {
            font-size: 20px; /* Slightly larger font size for the welcome message */
            color: #34495e; /* Soft gray color for the message */
            margin-bottom: 40px; /* Space below the paragraph */
        }

        table {
            width: 320px; /* Set fixed width for the table */
            border-collapse: collapse; /* Remove double borders */
            border-radius: 10px; /* Rounded corners for the table */
            overflow: hidden; /* Ensure rounded corners are respected */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Soft shadow for depth */
        }

        td {
            padding: 15px; /* Spacing within table cells */
            text-align: center; /* Center text in cells */
            border: 1px solid #e0e0e0; /* Light border for table cells */
            background-color: #ffffff; /* White background for table cells */
            transition: background-color 0.3s ease; /* Smooth transition for hover effect */
        }

        td:hover {
            background-color: #e9f3fe; /* Light blue background on hover */
        }

        a {
            color: #2980b9; /* Blue color for links */
            text-decoration: none; /* No underline */
            font-size: 18px; /* Font size for links */
            font-weight: bold; /* Bold text for links */
            transition: color 0.3s ease; /* Smooth color transition on hover */
        }

        a:hover {
            color: #1a5276; /* Darker blue on hover */
            text-decoration: underline; /* Underline on hover for links */
        }
    </style>
</head>

<body>
    <h1>WELCOME</h1>
    <p><?php echo $_SESSION['adminname'] ?></p>
    <table>
        <tr>
            <td><a href="AdminRegistration.php">Admin Registration</a></td>
        </tr>
        <tr>
            <td><a href="CoachVerification.php">Coach Verification</a></td>
        </tr>
        <tr>
            <td><a href="CoachRegistration.php">Coach Registration</a></td>
        </tr>
        <tr>
            <td><a href="Positions.php">Add Positions</a></td>
        </tr>
        <tr>
            <td><a href="Course.php">Add Course</a></td>
        </tr>
        <tr>
            <td><a href="AcademicYear.php">Add Academic Year</a></td>
        </tr>
        <tr>
            <td><a href="StudentVerification.php">Student Verification</a></td>
        </tr>
        <tr>
            <td><a href="AddGame.php">Add Game</a></td>
        </tr>
        <tr>
            <td><a href="Action.php">Add Action</a></td>
        </tr>
    </table>
</body>
</html>
