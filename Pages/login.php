<?php session_start();?>
<html>
    <head>
        <link rel="stylesheet" href="../CSS/signup.css">
        <title>Login</title>
    </head>
    <body>
        <div class="banner">
            <h1 class = "banner">NTSS</h1>
            <a href="signup.php" class= "banner">Sign up</a> 
            <a href="../index.php" class= "banner">Home</a>
        </div>
        <header>National Trade Show Service</header>
        <header>Login</header>
        <div class="box">
            <form action="../phpscripts/loginprocess.php" method="post">
            <label for="email">Email</label><br>
            <input type="text" id="email" name="email" required=""><br>
            <label for="password">Password</label><br>
            <input type="password" id="password" name="password" required=""><br>
            <br><button>Submit</button>
            </form>
            <p><?php if(isset($_SESSION['message'])){
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            }?>
            </p>
        </div>
        <footer>jsoltre1@broncos.uncfsu.edu CSC470</footer>
    </body>
</html>