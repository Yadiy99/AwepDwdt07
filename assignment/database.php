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
    echo "registration complete";
    $stmt->close();
    $conn->close();

}


?>