<?php
if(isset($_GET['success']) && $_GET['success'] == 1) {
    echo "<script>alert('Updated successfully');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log in</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!--Navbar-->
    <nav>
      <div class="logo">
        <img src="src/logo.png" width="50" height="50" />
        <h3>BOOK STORE</h3>
      </div>
      <div class="components">
        <div class="items">About Us</div>

        <div class="items">Cart</div>
        <div class="items">Contact Us</div>
      </div>
      <div class="profile">
      <?php
    if(isset($_SESSION["username"])){
      echo '<h4>';
        echo $_SESSION["username"];
        echo '</h4>';
    } else {
        echo '<h4><a href="login.php" style="text-decoration: none;">Log in</a></h4>';
        echo '<h4>|</h4>';
        echo '<h4><a href="register.php" style="text-decoration: none;">Sign Up</a></h4>'; 
    }
?>
      </div>
    </nav>
    <!--Navbar end-->
    <div class="container">
      <div class="left-section">
        <div style="margin: auto;"> <img style="margin-left: 80px;" src="src/asserts/login_img.jpg" width="400px" height="400px">
            <p style="color: rgb(14, 20, 77); margin: 60px; font-size: 16px; text-align: justify;
            text-justify: inter-word;">
              Welcome to the login page for our book store system! You are a
              valuable part of our bookstore community, and this is how you can
              explore the amazing world of books. To access special features such as
              order monitoring, personalized suggestions, and seamless browsing,
              enter your Email and password. Come for a voyage through the annals
              of knowledge and imagination. Enjoy your reading!
            </p> </div>
       
      </div>
      <div class="right-section">
        <form  action="include/login.inc.php" method="post">
          <h2 style="text-align: center; color: #1f396d">Login</h2>
          <label>E-mail</label><br />
          <input type="email"  name="email"/> <br />
          <label>Password</label><br />
          <input type="password"  name="pwd"/> <br />
          <button name="submit"  type="submit">Login</button>
          <?php
           if(isset($_GET["error"])){
            if ($_GET["error"] == "emptyinput"){
              echo ' <div id="error">Fill in the all feild</div>';
            }
            elseif ($_GET["error"] == "non"){
              echo ' <div id="error">success!</div>';
            }
           }
           ?>
        </form>
      </div>
    </div>

    <!--Footer-->
    <hr style="border-top: 1px solid rgb(147, 152, 160)" />
    <footer>
      <div class="footer">
        <div class="logo">
          <img src="src/logo.png" width="50" height="50" />
          <h3>BOOK STORE</h3>
        </div>
        <div class="components">
          <div class="items">Policies</div>

          <div class="items">Terms & conditions</div>
          <div class="items">Profile</div>
        </div>
        <div class="profile">
          <img src="src/icons/facebook.png" width="50" height="50" />
          <img
            src="src/icons/google.png"
            width="40"
            height="40"
            style="margin-left: 10px; padding-top: 8px"
          />
          <img
            src="src/icons/playstore.png"
            width="50"
            height="50"
            style="margin-left: 10px"
          />
        </div>
      </div>
    </footer>
    <!--Footer end-->
  </body>
</html>
