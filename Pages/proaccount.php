<?php session_start(); ?>
<html>
    <head>
        <link rel="stylesheet" href="../CSS/home.css">
        <title>Account Details</title>
    </head>
    <body>
        <div class="banner">
            <h1 class = "banner">NTSS</h1>
            <a class = "banner" href="../phpscripts/logout.php">logout</a>
            <a class="banner" href="prodash.php">dashboard</a> 
        </div>
        <header>National Trade Show Service</header>
        <header>Account Details</header>
        <table class="centertable">
            <tr>
                <th>First Name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Business</th>
                <th>Balance</th>

            </tr>
            <tr>
                <td><?php echo $_SESSION['fname'];?></td>
                <td><?php echo $_SESSION['lname'];?></td>
                <td><?php echo $_SESSION['email'];?></td>
                <td><?php echo $_SESSION['bname'];?></td>
                <td>$<?php echo $_SESSION['balance'];?></td>
            </tr>
        </table>
        <div class="center">
            <p>Want to pay your balance?</p>
            <a>Click Here</a>
        </div>

</html>