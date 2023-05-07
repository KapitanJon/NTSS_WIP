<?php
$sdate = "05/05/2023";
$edate = "05/06/2023";
$sdate=explode("/",$sdate);
$edate=explode("/",$edate);
if($sdate[0]>$edate[0] || $sdate[1]>$edate[1] || $sdate[2]>$edate[2]){
    echo "Invalid Date";
    exit();
}
?>