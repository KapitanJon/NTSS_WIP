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

        <footer>jsoltre1@broncos.uncfsu.edu CSC470</footer>
    </body>
</html>