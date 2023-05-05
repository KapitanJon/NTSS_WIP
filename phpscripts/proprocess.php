<?php
session_start();
#extract post data
extract($_POST);
#connect to db
include('connect.php');

#assign variables to post data
$email = $_POST['email'];
echo $email, " ";
$fname = $_POST['fname'];
echo $fname, " ";
$lname = $_POST['lname'];
echo $lname, " ";
$password = $_POST['password'];
echo $password," ";
$bname = $_POST['bname'];
echo $bname," ";

$sql=mysqli_query($con,"SELECT * FROM prousers WHERE email = '$email'");
if(mysqli_num_rows($sql)>0){
    $_SESSION['message'] = 'Email in Use';
    header("Location:../Pages/prouser.php");
    exit;

}
else{
    echo "\nEmail available";
}
$sql = "INSERT INTO prousers(first_name,last_name,email,password,businessname,balance) VALUES ('$fname','$lname','$email','$password','$bname',0)";
if(mysqli_query($con,$sql)){
    header("Location:../Pages/prosuccess.php");
}
?>