<?php
if(isset($_GET['success']) && $_GET['success'] == 1) {
    echo "<script>alert('Account Delete successfully');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>register</title>
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
        <div style="margin: auto">
          <img
            style="margin-left: 80px"
            src="src/asserts/register_img.jpg"
            width="400px"
            height="400px"
          />
          <p
            style="
              color: rgb(14, 20, 77);
              margin: 60px;
              font-size: 16px;
              text-align: justify;
              text-justify: inter-word;
            "
          >
            Welcome to our bookstore registration page! Join our vibrant
            literary community by creating your personalized account. Fill in
            the required information such as your name, email address and chosen
            password to begin a journey through the realms of literature. As a
            registered member, you'll enjoy access to exclusive benefits,
            including special offers, personalized recommendations and the
            ability to connect with fellow book lovers. Let's embark on this
            adventure together!
          </p>
        </div>
      </div>
      <div class="right-section">
        <form action="include/register.inc.php" method="post">
          <h2 style="text-align: center; color: #1f396d">Registration</h2>
          <label>Your Name</label><br />
          <input type="text" name="name"/> <br />
          <label>E-mail </label><br />
          <input type="email" name="email"/> <br />
          <label>Phone Number </label><br />
          <input type="text" name="phoneNumber"/> <br />
          <label>Password</label><br />
          <input type="password" name="pwd"/> <br />
          <label>Conform Password</label><br />
          <input type="password" name="pwdrepeat"/> <br />
         
          <button name="submit" type="submit">signup</button>
           <?php
           if(isset($_GET["error"])){
            if ($_GET["error"] == "emptyinput"){
              echo ' <div id="error">Fill in the all feild</div>';
            }
            elseif ($_GET["error"] == "invalidemail"){
              echo ' <div id="error">Invalid Email</div>';
            }
            elseif ($_GET["error"] == "passwordsdontmatch"){
              echo ' <div id="error">Passwords not matching !</div>';
            }
            elseif ($_GET["error"] == "stmtfailed"){
              echo ' <div id="error">Something went wrong!</div>';
            }
            elseif ($_GET["error"] == "Emailtaken"){
              echo ' <div id="error">Email Already taken!</div>';
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
