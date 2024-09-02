<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personal Details Form</title>
</head>
<body>

<h2>Personal Details Form</h2>

<form action="/submit-details" method="post">
  <div class="container">
    <label for="details"><b>Details</b></label>
    <input type="text" id="details" name="details" placeholder="Enter your details here..." required>

    <label for="sleep"><b>Sleep</b></label>
    <input type="number" id="sleep" name="sleep" placeholder="Hours of Sleep" min="0" max="24" required>

    <label for="foodAmount"><b>Food Amount</b></label>
    <input type="number" id="foodAmount" name="foodAmount" placeholder="Amount of Food" min="0" required>

    <button type="submit">Submit</button>
  </div>

  <div class="container">
    <p>Need help filling out this form? <a href="#">Help Section</a>.</p>
  </div>
</form>

</body>
</html>