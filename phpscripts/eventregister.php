<?php session_start();
include('connect.php');
$event=explode(",",$_POST["loc"]);
$price = $event[3];
$price=explode("$",$price);
$price = $price[1];
$event =  $event[0];
echo $event;
$is_speaker =$_POST["speaker"];
echo $is_speaker;
$user = $_SESSION['fname']." ".$_SESSION['lname'];
echo $user;
$sql = mysqli_query($con,"SELECT * FROM guestlists WHERE guest='$user' AND title='$event'");
if(mysqli_num_rows($sql)>0){
    header("Location:../Pages/eventregistration.php");
    $_SESSION['message']="You are already registered for that event";
    exit();
}
if($is_speaker=="on"){
    $sql = "INSERT INTO guestlists(title,guest,is_speaker) VALUES ('$event','$user',1)";
    mysqli_query($con,$sql);
    $_SESSION['message'] = 'You are registered';
    header("Location:../Pages/user.php");
    $email=$_SESSION['email'];
    $sql = "UPDATE users SET balance = balance + '$price' WHERE email='$email'";
    mysqli_query($con,$sql);
}
else{
    $sql = "INSERT INTO guestlists(title,guest,is_speaker) VALUES ('$event','$user',0)";
    mysqli_query($con,$sql);
    $_SESSION['message'] = 'You are registered';
    header("Location:../Pages/user.php");
    $email=$_SESSION['email'];
    $sql = "UPDATE users SET balance = balance + '$price' WHERE email='$email'";
    mysqli_query($con,$sql);

}   
?>