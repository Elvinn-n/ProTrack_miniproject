<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Action Selection Form</title>
</head>
<body>

<h2>Action Selection Form</h2>

<form action="/submit-action" method="post">
  <div class="container">
    <label for="details"><b>Details</b></label>
    <textarea id="details" name="details" rows="4" cols="50" placeholder="Enter your details here..." required></textarea>

    <label for="action"><b>Action</b></label>
    <select id="action" name="action" required>
      <option value="">Select an Action</option>
      <option value="option1">Option 1</option>
      <option value="option2">Option 2</option>
      <option value="option3">Option 3</option>
    </select>

    <button type="submit">Submit</button>
  </div>

  <div class="container">
    <p>Need more options? <a href="#">Contact Support</a>.</p>
  </div>
</form>

</body>
</html>