<link rel="stylesheet" href="style.css">
<?php
require "header.php";

?>

<main>
    <div class="wrapper-main">
        <section class="section-default">
           <h1>Sign Up</h1>
           <div class="forms2">
               <form class="form-signup" action="includes/signup.inc.php" method="POST">
           
           <input class="Username2" type="text" name="uid" placeholder="Username">
           <input class="Username2" type="text" name="mail" placeholder="Email">
           <input class="Password2" type="password" name="pwd" placeholder="Password">
           <input class="Password2" type="password" name="pwd-repeat" placeholder="Repeat Password">
          
           <button   class="button3" type="submit" name="signup-submit">SignUp</button>

        </form>
        </div>

        </section>
    </div>


</main>

<?php
require "footer.php";
?>
