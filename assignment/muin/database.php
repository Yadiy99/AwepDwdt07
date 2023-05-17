<?php


$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];


//database

$conn = new mysqli('localhost', 'root', '', 'bookers');

if($conn->connect_error){
    die('Connection Failed : '.$conn->cennect_error);

}else{
    $stmt = $conn->prepare("insert into register(username, password, email) values(?, ?, ?)");
    $stmt->bind_param("sss", $username, $password, $email);
    $stmt->execute();

    $stmt->close();
    $conn->close();

}


?>


<!DOCTYPE html>
<html>
<link rel="stylesheet" href="database.css">
<head>
  <meta charset="UTF-8">
  <title>Redirect After Timeout</title>
  <script>
    setTimeout(function() {
      window.location.href = "verification.php"; // Replace with the URL of your target page
    }, 0); // Replace 5000 with the desired timeout duration in milliseconds
  </script>
</head>
<body>

</body>
</html>
