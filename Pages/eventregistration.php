<?php session_start();
    include('../phpscripts/getevents.php');
?>
<html>
    <head>
        <link rel="stylesheet" href="../CSS/index_style.css">
    </head>
    <div class="banner">
            <h1 class = "banner">NTSS</h1>
            <a class = "banner" href="../phpscripts/logout.php">logout</a><a> | </a>
            <a class="banner" href="user.php">dashboard</a> 
    </div>
        <header>National Trade Show Service</header>
        <header>Event Registration</header>
        <h2>Select an Event</h2>
        <form action="../phpscripts/eventregister.php" method = "post" id="register">
            <div class="box">
            <select name="loc" id="loc" form="register">
                    <?php 
                        foreach($options as $option){
                    ?>
                    <option><?php echo $option['title'],", ",$option['location'],", Ticket Price:$",$option['ticketprice'];?></option>        
                    <?php    
                    }
                    ?>
                </select>
                <label for="speaker">Are you a speaker at this event?</label>
               <br><input type="checkbox" id="speaker" name="speaker">
               <br><button>Submit</button>
               <p><?php if(isset($_SESSION['message'])){
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            }?>
            </p>
            </div>
</html>