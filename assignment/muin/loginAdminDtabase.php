<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
$username2 = $_POST['username'];
$password2 = $_POST['password'];

$adminName = "admin";
$adminPassword = "1234";

$string1 = $adminName . $adminPassword;
$string2 = $username2 . $password2;

    if ($string1 === $string2 ){
        header("Location: dashboard.php");
        exit();
    }
    else {  
        header("Location: adminInvalid.php");
        exit();
    }
  

?>
