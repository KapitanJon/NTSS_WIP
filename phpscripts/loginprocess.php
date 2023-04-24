<?php
session_start();
include('connect.php');
$email = $_POST['email'];
echo $email;
$password = $_POST['password'];
echo $password;
$sql=mysqli_query($con,"SELECT * FROM users WHERE email='$email' and password='$password'");
$row = mysqli_fetch_array($sql);
if(is_array($row)){
    $_SESSION['email'] = $row['email'];
    $_SESSION['fname'] = $row['first_name'];
    $_SESSION['lname'] = $row['last_name'];
    header("Location:../Pages/user.php");
}
else{
    $_SESSION['message'] = 'Incorrect email or password';
    header("Location:../Pages/login.php");
}


?>