<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Book Store</title>
    <link rel="stylesheet" href="style.css" >
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
      echo '<h4> <a  style="text-decoration: none;" href="../project/Admin&Profile_Accounts/userAccount.php">';
        echo $_SESSION["username"];
        echo '</a></h4>';
    } else {
        echo '<h4><a href="login.php" style="text-decoration: none;">Log in</a></h4>';
        echo '<h4>|</h4>';
        echo '<h4><a href="register.php" style="text-decoration: none;">Sign Up</a></h4>'; 
    }
?>
       
      </div>
    </nav>
   
        <!--Navbar end-->
    <!--Home-->
    <div class="parallax-1">
      <div class="caption">
        <span class="border">
          Welcome to Our Bookstore ! <br />
          Explore and find Your next favorite read .
        </span>
      </div>
    </div>
    <div class="books">
      <div class="row" style= "margin-left:200px">
        <div class="column">
          <div class="card">
            <img src="src/books/book.png" width="190" height="220" />
            <p>book Name</p>
            <p>Price</p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <img src="src/books/book.png" width="190" height="220" />
            <p>book Name</p>
            <p>Price</p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <img src="src/books/book.png" width="190" height="220" />
            <p>book Name</p>
            <p>Price</p>
          </div>
        </div>

        <div class="column">
          <div class="card">
            <img src="src/books/book.png" width="190" height="220" />
            <p>book Name</p>
            <p>Price</p>
          </div>
        </div>

        <div class="column">
          <div class="card">
            <img src="src/books/book.png" width="190" height="220" />
            <p>book Name</p>
            <p>Price</p>
          </div>
        </div>

        <div class="column">
          <div class="card">
            <img src="src/books/book.png" width="190" height="220" />
            <p>book Name</p>
            <p>Price</p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <img src="src/books/book.png" width="190" height="220" />
            <p>book Name</p>
            <p>Price</p>
          </div>
        </div>

        <div class="column">
          <div class="card">
            <img src="src/books/book.png" width="190" height="220" />
            <p>book Name</p>
            <p>Price</p>
          </div>
        </div>

        <div class="column">
          <div class="card">
            <img src="src/books/book.png" width="190" height="220" />
            <p>book Name</p>
            <p>Price</p>
          </div>
        </div>

        <div class="column">
          <div class="card">
            <img src="src/books/book.png" width="190" height="220" />
            <p>book Name</p>
            <p>Price</p>
          </div>
        </div>
      </div>
    </div>
     <!--Home end-->
     <!--Footer-->
     <hr style=" border-top: 1px solid rgb(134, 138, 148);">
     <footer>
      <div class="footer">
       
        <div class="logo">
          <img src="src/logo.png" width="50" height="50" />
          <h3>BOOK STORE</h3>
        </div>
        <div class="components">
          <div class="items"><a  style="text-decoration: none;color: black" href="privacyPage/privacy.html">Policies</a></div>
  
          <div class="items"><a  style="text-decoration: none;color: black" href="termsandconditions/terms.html">Terms & conditions</div>
          <div class="items"><a  style="text-decoration: none;color: black" href="../project/Admin&Profile_Accounts/userAccount.php">Profile</div>
        </div>
        <div class="profile">
          <img src="src/icons/facebook.png" width="50" height="50" />
          <img src="src/icons/google.png" width="40" height="40" style="margin-left: 10px; padding-top: 8px;"/>
          <img src="src/icons/playstore.png" width="50" height="50"  style="margin-left: 10px;" />
        </div>
      </div>
     </footer>
      <!--Footer end-->
  </body>
</html>
