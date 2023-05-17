<!DOCTYPE html>
<html>
<link rel="stylesheet" href="verification.css">
<head>
    
  <meta charset="UTF-8">
  <title>Redirect After Timeout</title>
  <script>
    setTimeout(function() {
      window.location.href = "welcome.php"; // Replace with the URL of your target page
    }, 3000); // Replace 5000 with the desired timeout duration in milliseconds
  </script>
</head>
<body>
    <div>
    <h1>Account created!</h1>
    <br>
  <h3>Redirecting in 3 seconds...</h3>
  </div>
</body>
</html>