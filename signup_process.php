<?php
include "db_connect.php";

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users(username,email,password)
VALUES('$username','$email','$password')";

if($conn->query($sql)){
    header("Location: signin.html");
}else{
    echo "Signup failed";
}
?>



