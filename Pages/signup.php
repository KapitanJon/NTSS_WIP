<?php session_start();?>
<html>
    <head>
        <link rel="stylesheet" href="../CSS/signup.css">
        <title>Signup</title>
    </head>
    <body>
        <div class="banner">
            <h1 class = "banner">NTSS</h1>
            <a href="login.php"class= "banner">Login</a> 
            <a href="../index.php" class= "banner">Home</a>
        </div>
        <header>National Trade Show Service</header>
        <header>Sign up</header>
        <div class="box">
            <form action="../phpscripts/signupprocess.php" method="post">
            <label for="fname">First name</label><br>
            <input type="text" id="fname" name="fname" required=""><br>
            <label for="lname">Last name</label><br>
            <input type="text" id="lname" name="lname" required=""><br>
            <label for="email">Email</label><br>
            <input type="text" id="email" name="email" required=""><br>
            <label for="password">Password</label><br>
            <input type="text" id="password" name="password" required=""><br>
            <br><button>Submit</button>
            </form>
            <p>Are you a business owner or tradeshow runner?</p>
            <a class="box" href="prouser.php">Signup Here</a>
            <p><?php if(isset($_SESSION['message'])){
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            }?>
            </p>
        </div>
        <footer>jsoltre1@broncos.uncfsu.edu CSC470</footer>
    </body>    
</html>