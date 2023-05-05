<?php 
session_start();
include('connect.php');
$author=$_SESSION['email'];
echo $author."\n";
$sql="SELECT title FROM events WHERE author='$author'";
$result=mysqli_query($con,$sql);
$i=0;
$title_ = array();
while($rows=mysqli_fetch_array($result)){
    $title_[$i]=$rows[0];
    $i++;
}
echo $title_[0];
echo $title_[1];

?>