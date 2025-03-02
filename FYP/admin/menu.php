
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="menu.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'>
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <style>
    body{
      background-color:skyblue;
    }
    </style>
  <div class="sidebar">
    <div class="logo-details">
          <i class='fas fa-address-card'></i>
    <span class="logo_name">PADINI</span>
    </div>
      <ul class="nav-links">
        <li class="sidebar-item">
          <a href="myprofile.php" class="active">
            <i class='fas fa-address-card'></i>
            <span class="links_name">MY PROFILE</span>
          </a>
        </li>
        <li>
            <a href="changepass.php">
            <i class='fas fa-user-alt' ></i>
            <span class="links_name">CHANGE PASSWORD</span>
          </a>
        </li>
        <li>
            <a href="customerlist.php">
            <i class='fas fa-user-alt' ></i>
            <span class="links_name">CUSTOMER</span>
          </a>
        </li>
        <li>
          <a href="OrderList.php">
            <i class='fas fa-cart-plus' ></i>
            <span class="links_name">ORDER LIST</span>
          </a>
        </li>
        <li>
          <a href="ProductList.php">
            <i class='fas fa-cubes' ></i>
            <span class="links_name">PRODUCT</span>
          </a>
          
        <li class="log_out">
          <a href="index.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">LOG OUT</span>
          </a>
        </li>
      </ul>
  </div>

    


</body>
</html>