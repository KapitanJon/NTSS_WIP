<?php 
include 'connect.php';

$query=mysqli_query($con,"SELECT venuename, state FROM `Venues`");
if ($query->num_rows>0){
    $options=mysqli_fetch_all($query,MYSQLI_ASSOC);
}
foreach($options as $option){
    echo $option['venuename'],",",$option['state'];
}
?>