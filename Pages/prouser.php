<?php session_start();?>
<html>
    <head>
        <link rel="stylesheet" href="../CSS/signup.css">
        <title>Signup</title>
    </head>
    <body>
        <div class="banner">
            <h1 class = "banner">NTSS</h1>
            <a class= "banner">Login</a> 
            <a href="../index.php" class= "banner">Home</a>
        </div>
        <header>National Trade Show Service</header>
        <header>Professional Sign up</header>
        <div class="box">
            <form action="../phpscripts/proprocess.php" method="post">
            <label for="fname">First name</label>
            <input type="text" id="fname" name="fname" required=""><br>
            <label for="lname">Last name</label>
            <input type="text" id="lname" name="lname" required=""><br>
            <label for="email">Email</label><br>
            <input type="text" id="email" name="email" required=""><br>
            <label for="password">Password</label><br>
            <input type="text" id="password" name="password" required=""><br>
            <label for="bname">Business</label><br>
            <input type="text" id="bname" name="bname" required="">
            <br><button>Submit</button>
            </form>    
            <p><?php if(isset($_SESSION['message'])){
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            }?>
            </p>
            <p>Already have a pro-account?</p>
            <a class ="box"href=prologin.php>Login Here!</a>
        </div>
    </body>
</html>
<?php session_destroy();?>