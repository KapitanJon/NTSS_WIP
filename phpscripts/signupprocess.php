<?php
session_start();
#extract post data
extract($_POST);
#connect to db
include('connect.php');

#assign variables to post data
$email = $_POST['email'];

$fname = $_POST['fname'];

$lname = $_POST['lname'];

$password = $_POST['password'];

$sql=mysqli_query($con,"SELECT * FROM users WHERE email = '$email'");

if(mysqli_num_rows($sql)>0){
    $_SESSION['message'] = "Email in use!";
    header("Location:signup.php");
    echo "Email in use";
    exit;

}

$sql = "INSERT INTO users(first_name,last_name,email,password,balance) VALUES ('$fname','$lname','$email','$password',0)";
if(mysqli_query($con,$sql)){
    header("Location:../Pages/success.html");
}
?>