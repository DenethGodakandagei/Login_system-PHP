

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js" defer></script>
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
                  <h4>Log in</h4>
                  <h4>|</h4>
                  <h4>sign Up</h4>
                </div>
              </nav>
            
        </header>

        <div class="container">
           
            <!-- Left section for user information -->
            <div class="left-section">
 <h2 style="color: rgb(47, 45, 45);">Admin account</h2>
             
			        <img src="src/user.png" alt="Company Logo" class="logo" style="margin: 15px;">
               
				<button class="btn" onclick="">View Massages</button>
				<button class="btn" onclick="logout">Log out</button>
            </div>
 <!-- Right section for updating password -->
           
            <div class="right-section">
              
                <div class="form-group"> 
                    <button class="btn" ><a href="order.php">view Orders</a></button>
                  
                </div>
                <div class="form-group">
                    <button class="btn" >Add New books</button>
                  
                </div>
                <div class="form-group">
                    <button class="btn" >view All Books</button>

                </div>
              
                <button class="btn" onclick="Submit()">submit</button>
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

