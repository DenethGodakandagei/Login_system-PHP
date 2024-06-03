<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oder</title>
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
           
          
            <div class="left-section">
 
            <?php
require '../include/config.php';

$sql = "SELECT orderID, orderName, quantity, price FROM orders";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
    echo "<table border='1' style='border-color:black;'>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr style='height:10px; width:50px; margin:4px;'>";
        echo "<td>" . $row["orderID"] . "</td>" . "<td>" . $row["orderName"] . "</td>" . "<td>" . $row["quantity"] . "</td>" . "<td>" . $row["price"] . "</td>"  ;
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No results";
}

$conn->close();


?>
				
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

