<?php
$hostname="127.0.0.1"; //local server name default localhost
$username="admin";  //mysql username default is root.
$password="M3gusta@1";       //blank if no password is set for mysql.
$database="NTSS";  //database name which you created
$con= mysqli_connect($hostname,$username,$password,$database);
if(! $con)
{
die('Connection Failed'.mysqli_error());
}
else{
    echo "connected";
}
?>