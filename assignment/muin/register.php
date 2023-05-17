

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

}
?>

<!DOCTYPE html>
<html>
    
<link rel="stylesheet" href="register.css">
<head>
    <title>Register</title>
    <script>
    function redirectToPage() {
      window.location.href = "welcome.php"; // Replace with the URL of your target page
    }
  </script>
</head>
<link rel="stylesheet" href="regLog.css">
<body>

    <div>
    <h1>Register</h1>
    <form method="POST" action="database.php">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    </div>
    
<button type="reset" onclick="redirectToPage()">Cancel</button>
<button type="submit">Register</button>
    </form>
</body>
</html>