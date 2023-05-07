<?php
session_start();
include('connect.php');
$name=$_POST['title'];
echo $name;
$type=$_POST['type'];
echo $type;
$startdate= $_POST['startdate'];
echo $startdate;
$endate = $_POST['endate'];
echo $endate;
$sdate=explode("/",$startdate);
$edate=explode("/",$endate);
if($sdate[0]>$edate[0] || $sdate[1]>$edate[1] || $sdate[2]>$edate[2]){
    echo "Invalid Date";
    $_SESSION['message']="ERROR:Invalid start or end date. Hint: Make sure your end date is after the start date.";
    header("Location:../Pages/createvent.php");
    exit();
}
$loc = $_POST['loc'];
echo $loc;
$price=(int)$_POST['ticketprice'];
if($ticket<=0){
    $_SESSION['message']="ERROR:Must have valid ticket price";
    header("Location:../Pages/createvent.php");
    exit();
}
$author=$_SESSION['email'];
$bname=$_SESSION['bname'];
$sql = mysqli_query($con,"INSERT INTO events(title,type,hostbusiness,startdate,endate,location,author,ticketprice) VALUES ('$name','$type','$bname','$startdate','$endate','$loc','$author','$price')");
header("Location:../Pages/eventcreated.php");
?>