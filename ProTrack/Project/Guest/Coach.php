<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Information Form</title>
</head>
<body>

<form action="/submit_information.php" method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br>
    
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br>
    
    <label for="address">Address:</label><br>
    <input type="text" id="address" name="address"><br>
    
    <label for="profession">Proof:</label><br>
    <input type="file" id="proof" name="proof"><br>
    
    <input type="submit" value="Submit">
</form>

</body>
</html>