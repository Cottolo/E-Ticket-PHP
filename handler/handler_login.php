<?php
require_once('../func/Connection.php');
require_once('../helper/helper.php');

$email = $_POST['email'];
$password = md5($_POST['password']);


$query = mysqli_query($connection, "SELECT * FROM admin WHERE email='$email'AND password='$password'");

if (mysqli_num_rows($query) !=0) {
    $row = mysqli_fetch_assoc($query);
    

    session_start();
    $_SESSION['id'] = $row['id'];

    header("location: ".B_URL.'admin.php');
}else {
    header("location: ".B_URL.'login.php');
}

?>