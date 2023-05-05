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
$loc = $_POST['loc'];
echo $loc;
$price=$_POST['ticketprice'];
$author=$_SESSION['email'];
$bname=$_SESSION['bname'];
$sql = mysqli_query($con,"INSERT INTO events(title,type,hostbusiness,startdate,endate,location,author,ticketprice) VALUES ('$name','$type','$bname','$startdate','$endate','$loc','$author','$price')");
header("Location:../Pages/eventcreated.php");
?>