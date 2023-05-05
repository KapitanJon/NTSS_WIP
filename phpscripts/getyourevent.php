<?php
session_start();
include('connect.php');
$author=$_SESSION['email'];
$sql="SELECT * FROM events WHERE author='$author'";
$result=mysqli_query($con,$sql);
while($rows=mysqli_fetch_assoc($result)){
   echo $rows['title'];
   echo $rows['location'];
   echo $rows['startdate'];
   echo $rows['endate'];
   echo $rows['ticketprice'];

}


?>