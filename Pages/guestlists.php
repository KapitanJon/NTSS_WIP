<?php 
session_start();
include('../phpscripts/connect.php');
$author=$_SESSION['email'];
echo $author."\n";
$sql="SELECT title FROM events WHERE author='$author'";
$result=mysqli_query($con,$sql);
$i=0;
$title_ = array();
while($rows=mysqli_fetch_array($result)){
    $title_[$i]=$rows[0];
    $i++;
}
echo $title_[0]."\n";
echo $title_[1];
?>
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
                        <th>Guests</th>
                    </tr>
                    <?php
                        $author=$_SESSION['email'];
                        $sql="SELECT * FROM guestlists WHERE title='$title_[0]'";
                        $result=mysqli_query($con,$sql);
                        while($rows=mysqli_fetch_assoc($result)){

                        ?>
                    <tr>
                        <td><?php echo $rows['title'];?></td>
                        <td><?php echo $rows['guest'];?></td>
                    </tr>
                    <?php
                        }

                    ?>
                    </table>
                    <table>
                    <tr>
                        <th>Title</th>
                        <th>Guests</th>
                    </tr>
                    <?php
                        $author=$_SESSION['email'];
                        $sql="SELECT * FROM guestlists WHERE title='$title_[1]'";
                        $result=mysqli_query($con,$sql);
                        while($rows=mysqli_fetch_assoc($result)){

                        ?>
                    <tr>
                        <td><?php echo $rows['title'];?></td>
                        <td><?php echo $rows['guest'];?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>
        </div><br>
</html>