<?php
include "conn.php"; 
session_start();

if (isset($_SESSION['username'])) {

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,1,0"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="css/main.css">
    <title>Sidebar mather</title>
   
  </head>
  <body>
    <aside class="sidebar" id="sidebar">
      <!-- <button id="toggleButton" class="toggle-button" onclick="toggleSidebar()">
        Toggle Sidebar
      </button> -->

      <header>  
        <img src="../assets/logo-icon.png" />
        <span style="margin:10px 20px;font-family:Material Symbols Outlined;"> Mather & Mather </span>
      </header>
      <button>
        <span class="material-symbols-outlined"> home </span>
        <a href="index.php" class="link">
          <span>Home</span>
        </a>  
      </button>
      <button onclick="handleHeaderClicked('tools')">
        <!-- <span class="material-symbols-outlined"> build </span> -->
        <span>Main Products</span>
        <span class="material-symbols-outlined"> expand_more </span>
      </button>
      <div id="tools" class="subnav">
        <div class="subnav-inner">
          <button>
          <a href="addproduct.php" class="link">
            <span>Add Products</span>
          </a>  
          </button>

          <button>
          <a href="products_list.php" class="link">
            <span>Products Lists</span>
          </a>  
          </button>

        </div>
      </div>

      <button onclick="handleHeaderClicked('settings')">
        <!-- <span class="material-symbols-outlined"> settings </span> -->
        <span>Sub Products</span>
        <span class="material-symbols-outlined"> expand_more </span>
      </button>
      <div id="settings" class="subnav">
      <div class="subnav-inner">
          <button>
          <a href="add-general.php" class="link">
            <span>Add General Hardwares</span>
          </a>  
          </button>
          <button>
          <a href="general.php" class="link">
            <span>General Hardwares List</span>
          </a>  
          </button>
          <button>
          <a href="add-kitchen.php" class="link">
            <span>Add Kitchen Accessories</span>
          </a>  
          </button>
          <button>
          <a href="kitchen.php" class="link">
            <span>Kitchen Accessories List</span>
          </a>  
          </button>

          <button>
          <a href="add-bathroom.php" class="link">
            <span>Add Bathroom Accessories</span>
          </a>  
          </button>
          <button>
          <a href="bathroom.php" class="link">
            <span>Bathroom Accessories List</span>
          </a>  
          </button>

        </div>
      </div>

      <button onclick="handleHeaderClicked('gallery')">
        <!-- <span class="material-symbols-outlined"> settings </span> -->
        <span>Gallery</span>
        <span class="material-symbols-outlined"> expand_more </span>
      </button>
      <div id="gallery" class="subnav">
        <div class="subnav-inner">
          <button>
            <span>Add Gallery</span>
          </button>
          <button>
            <span>Gallery List</span>
          </button>
          
        </div>
      </div>

      <button>
        <!-- <span class="material-symbols-outlined"> account_circle </span> -->
        <span>Profile</span>
      </button>

      <button>
        <span class="material-symbols-outlined"> logout </span>
          <a href="logout.php" class="link"><span>Log Out</span></a>
      </button>
    </aside>

    <button id="toggleButton" class="toggle-button" onclick="toggleSidebar()">
    <span class="material-symbols-outlined"> menu </span> 
    </button>
    
    <div class="heading">
      <h3 style="font-size:20px;margin-top:0;padding:18px">Add New Product</h3>
    </div>  


    <div class="col-md-9 form-container">

      
      <div class="content">
      <form method="post" id="file-upload-form" action="upload/upload-product.php" enctype="multipart/form-data">


      <div class="input-container">
      <label>Product Category</label>
      <select name="category" style="padding:10px;border-radius:6px" required>
      <option value="" selected="selected" style="display: none;">Select An Item From List</option>
        <option value="General Hardware">General Hardware</option>
        <option value="Kitchen Accessories">Kitchen Accessories</option>
        <option value="Bathroom Accessories">Bathroom Accessories</option>
      </select>  
      </div>

      <div class="input-container">
      <input type="text" name="prod_name" class="input" required>
      <label class="label">Product Name</label>
      </div>

      <button class="save-btn" type="submit" name="submit">
      <div class="svg-wrapper-1">
      <div class="svg-wrapper">
            <svg class="icon" height="30" width="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M22,15.04C22,17.23 20.24,19 18.07,19H5.93C3.76,19 2,17.23 2,15.04C2,13.07 3.43,11.44 5.31,11.14C5.28,11 5.27,10.86 5.27,10.71C5.27,9.33 6.38,8.2 7.76,8.2C8.37,8.2 8.94,8.43 9.37,8.8C10.14,7.05 11.13,5.44 13.91,5.44C17.28,5.44 18.87,8.06 18.87,10.83C18.87,10.94 18.87,11.06 18.86,11.17C20.65,11.54 22,13.13 22,15.04Z">
            </path>
            </svg>
      </div>
      </div>
      <span>Save/Upload</span>
      </button>

      </form>
     
     
      </div>

    </div>

    <script src="main.js"></script>
    <script>
      // JavaScript code to toggle the sidebar
      function toggleSidebar() {
        const sidebar = document.getElementById("sidebar");
        sidebar.classList.toggle("active");
      }
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

<?php 
} else {
    header("location: login.php");
} 
?> 
