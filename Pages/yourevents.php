<?php session_start(); 
include('../phpscripts/getyourevent.php');?>
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
        <header>Event Details</header>
        <div class="center">
            <p>
                <table>
                    <tr>
                        <th>Title</th>
                        <th>Location</th>
                        <th>Start Date</th>
                        <th>Start Date</th>
                        <th>Ticket Price</th>
                    </tr>
                    <?php
                        include('connect.php');
                        $author=$_SESSION['email'];
                        $sql="SELECT * FROM events WHERE author='$author'";
                        $result=mysqli_query($con,$sql);
                        while($rows=mysqli_fetch_assoc($result)){

                        ?>
                    <tr>
                        <td><?php echo $rows['title'];?></td>
                        <td><?php echo $rows['location'];?></td>
                        <td><?php echo $rows['startdate'];?></td>
                        <td><?php echo $rows['endate'];?></td>
                        <td><?php echo $rows['ticketprice'];?></td>

                    </tr>
                    <?php
                        }
                    ?>
                </table>
                <div class="mediumbox">
            <a class="mediumbox" href="guestlists.php">Guest List</a>
        </div><br>
            <p>Want to pay your balance?</p>
            <a>Click Here</a>
        </div>

</html>