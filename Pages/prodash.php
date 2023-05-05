<?php session_start(); ?>
<html>
    <head>
        <link rel="stylesheet" href="../CSS/home.css">
        <title>Home</title>
    </head>
    <body>
        <div class="banner">
            <h1 class = "banner">NTSS</h1>
            <a class = "banner" href="../phpscripts/logout.php">logout</a> 
        </div>
        <header>National Trade Show Service</header>
        <header>Home</header>
        <p>Welcome <?php echo $_SESSION['fname']?>!</p>
        <p>What can we do for you today?</p>
        <div class="smallbox">
            <a>Find Event</a>
        </div><br>
        <div class="mediumbox">
            <a>register for event</a>
        </div><br>
        <div class="mediumbox">
            <a class="mediumbox" href="proaccount.php">View account</a>
        </div><br>
        <div class="mediumbox">
            <a class="mediumbox" href="createvent.php">Create Event</a>
        </div><br>
        <div class="mediumbox">
            <a class="mediumbox" href="aboutevents.php">About Events</a>
        </div><br>
        <div class="mediumbox">
            <a class="mediumbox" href="yourevents.php">Your Events</a>
        </div><br>
        

        <footer>jsoltre1@broncos.uncfsu.edu CSC470</footer>
    </body>
</html>