
<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  
</head>
<body>
    <div class="admin-login">
        <header>
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
      echo '<h4><a href="../include/logout.inc.php"  style="text-decoration: none;">Log out</a></h4> ';
       
        echo '</a></h4>';
    } else {
        
        echo '<h4>User</h4>'; 
    }
?>
                </div>
              </nav>
            
        </header>

        <div class="container">
           
            <!-- Left section for user information -->
            <div class="left-section">
 <h2 style="color: rgb(47, 45, 45);">User account</h2>
             
			        <img src="src/user.png" alt="Company Logo" class="logo" style="margin: 15px;">
                <div class="form-group">
                    <label for="name"> Name</label>
                      <?php 
                         if(isset($_SESSION["username"])){
                          echo $_SESSION["username"];
                         }
                      ?>
                </div>
                
                <div class="form-group">
                    <label for="phone-number">Phone Number</label>
                    <?php 
                         if(isset($_SESSION["phoneNumber"])){
                          echo $_SESSION["phoneNumber"];
                         }
                      ?>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <?php 
                         if(isset($_SESSION["userEmail"])){
                          echo $_SESSION["userEmail"];
                         }
                      ?>
                </div>
				
				<button class="btn" name="submit" style="background-color:red; "><a href="../include/delete.inc.php"  style="text-decoration: none;color:white;">Delete your Acount</a></button>
            </div>
 <!-- Right section for updating password -->
           
            <div class="right-section">
                <h2 style="padding: 10px;">Update Your Datails</h2>
			         <form action="../include/update.inc.php" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text"  name="username" value="  <?php 
                         if(isset($_SESSION["username"])){
                          echo $_SESSION["username"];
                         }
                      ?>">
                </div>
               
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="   <?php 
                         if(isset($_SESSION["userEmail"])){
                          echo $_SESSION["userEmail"];
                         }
                      ?>">
                </div>
                <div class="form-group">
                    <label for="phone Number">Phone Number</label>
                    <input type="text" name="PhoneNumber" value=" <?php 
                         if(isset($_SESSION["phoneNumber"])){
                          echo $_SESSION["phoneNumber"];
                         }
                      ?>">
                </div>
                <button class="btn" name="submit" type="submit">Update</button>
                        </form>
            </div>
        </div>
    </div>
    <hr style="border-top: 1px solid rgb(147, 152, 160)" />
    <div>   <footer>
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
</div> 
</body>
</html>

