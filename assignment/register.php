

<?php

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {

//     $username = $_POST['username'];
//     $password = $_POST['password'];
//     $email = $_POST['email'];

//     // // validate inputs
//     // if (empty($username)  empty($password)  empty($email)) {
//     //     echo 'Please fill out all fields.';
//     // } else {
//     //     // connect to database
//     //     $db = mysqli_connect('localhost', 'username', 'password', 'database_name');

//     //     // check for errors
//     //     if (!$db) {
//     //         die('Could not connect: ' . mysqli_error());
//     //     }

//     //     // prepare query
//     //     $query = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";

//     //     // execute query
//     //     $result = mysqli_query($db, $query);

//     //     // check for errors
//     //     if (!$result) {
//     //         echo 'Error registering user: ' . mysqli_error($db);
//     //     } else {
//     //         echo 'Registration successful.';
//     //     }

//     //     // close database connection
//     //     mysqli_close($db);
//     // }

//     echo $username . $password . $email; 
// }
// ?>

<!DOCTYPE html>
<html>
    

<head>
    <title>Registration Form</title>
</head>
<link rel="stylesheet" href="regLog.css">
<body>

    <div>
    <h1>Registration Form</h1>
    <form method="POST" action="database.php">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    </div>
<button type="submit">Register</button>
    </form>
</body>
</html>