<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
$username1 = $_POST['username'];
$password1 = $_POST['password'];



$conn = new mysqli('localhost', 'root', '', 'bookers');

if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("SELECT id, username, password, email FROM register");
    $stmt->execute();

    $num = 0;
    $result = $stmt->get_result();
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $username = $row['username'];
        $password = $row['password'];

        $string1 = $username . $password;
        $string2 = $username1 . $password1;

        

       if($string1 == $string2 ){
        $num = $num + 1;
        }else{
        //nothing
        }

    } 


    if ($num === 1){
        header("Location: dashboard.php");
        exit();

    }
    else {
        header("Location: invalid.php");
        exit();
    }
    $stmt->close();
    $conn->close();
}

?>
