<?php
$ticket = (int)readline("Ticket price: ");
if($ticket<=0){
    echo "Must be valid number";
}
echo $ticket;
?>