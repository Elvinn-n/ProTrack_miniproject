<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Content Input Form</title>
</head>
<body>

<h2>Content Input Form</h2>

<form action="/submit-content" method="post">
  <div class="container">
    <label for="content"><b>Content</b></label>
    <textarea id="content" name="content" rows="5" cols="40" placeholder="Enter your content here..." required></textarea>

    <button type="submit">Submit</button>
  </div>

  <div class="container">
    <p>Need more guidance? <a href="#">Help Section</a>.</p>
  </div>
</form>

</body>
</html>