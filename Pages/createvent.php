<?php session_start(); 
    include('../phpscripts/getvenue.php');
?>
<html>
    <head>
        <link rel="stylesheet" href="../CSS/home.css">
        <title>Create Event</title>
    </head>
    <body>
        <div class="banner">
            <h1 class = "banner">NTSS</h1>
            <a class = "banner" href="../phpscripts/logout.php">logout</a>
            <a class="banner" href="prodash.php">dashboard</a> 
        </div>
        <header>National Trade Show Service</header>
        <header>Create Event</header>
        <form action="../phpscripts/createvent.php" id="eventform" method="post">
            <div class = box>
                <label for="title">Event Name</label><br>
                <input type="text" id="title" name="title" required=""><br>
                <label for="type">What kind of trade show is it?</label><br>
                <input type="text" id="type" name="type" required=""><br>
                <label for="startdate">Start Date</label><br>
                <input type="date" id="startdate" name="startdate" required=""><br>
                <label for="endate">End Date</label><br>
                <input type="date" id="endate" name="endate" required=""><br>
                <label for="ticket">Ticket Price</label><br>
                <input type="text" id="ticketprice" name="ticketprice" required=""><br>
                <label for="loc">location</label><br>
                <select name="loc" id="loc" form="eventform">
                    <?php 
                        foreach($options as $option){
                    ?>
                    <option><?php echo $option['venuename'],",",$option['state'];?></option>        
                    <?php    
                    }
                    ?>
                </select>
                <br><button>submit</button>
            </div>
        </form>
</html>