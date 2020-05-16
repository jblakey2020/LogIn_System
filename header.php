<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<body>
<header>
    
        <div class="topnav">
            <a class="active" href="index.php">Home</a>
            <a href="#">Portfolio</a>
            <a href="#">Contact</a>
            <a href="#">About</a>

<!-- ALLOW ME TO HAVE FORMS INSIDE OF THE NAVBAR -->
<div class="login-container">
<form action="includes/login.inc.php" method="POST">
<div class="forms">
            <form  class="input" action="includes/login.inc.php" method="POST">
            <!-- <input type="text" name="mailuid" placeholder="Username/Email...">
            <input type="password" name="pwd" placeholder="password..."> -->

            <input type="password" name="pwd" placeholder="password...">
            <input type="text" name="mailud" placeholder="UserName/Email">
        </form>
        </div>


</div>


    <!-- ALLOWED ME TO MOVE EVERYTHING TO THE RIGHT OF THE NAVBAR -->
    <div class="topnav-right">
     <div class="button">
        <button class="button1" type="submit" name="logout-submit">Logout</button>
        <a  href="SignUp.php">SignUp</a>
        <button class="button2" type="submit" name="login-submit">Login</button>
        </div>
        </div>
        <!-- ENDING TO EVERYTHING THAT IS MOVED RIGHT -->

            </div>
</header>
    
</body>
</html>