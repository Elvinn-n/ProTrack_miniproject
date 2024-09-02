<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Complaint Form</title>
</head>
<body>

<h2>Complaint Form</h2>

<form action="/submit-complaint" method="post">
  <div class="container">
    <label for="title"><b>Title</b></label>
    <input type="text" id="title" name="title" placeholder="Enter Title Here..." required>

    <label for="complaint"><b>Complaint</b></label>
    <textarea id="complaint" name="complaint" rows="10" cols="50" placeholder="Describe your complaint here..." required></textarea>

    <button type="submit">Submit Complaint</button>
  </div>

  <div class="container">
    <p>If you need assistance, please contact our support team.</p>
  </div>
</form>

</body>
</html>