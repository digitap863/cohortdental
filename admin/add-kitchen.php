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
    <title>Admin mather</title>
   
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
      <h3 style="font-size:20px;margin-top:0;padding:18px">Add New Kitchen Hardwares</h3>
    </div>  


    <div class="col-md-9 form-container">

      
      <div class="content">
      <form method="post" id="file-upload-form" action="upload/upload-kitchen.php" enctype="multipart/form-data">

      <label style="margin-bottom:10px">Upload Product Image</label>
      <label class="custum-file-upload" for="file">
      <div class="icon">
      <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24"><g stroke-width="0" id="SVGRepo_bgCarrier"></g>
            <g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g>
            <g id="SVGRepo_iconCarrier"> 
                  <path fill="" d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z" clip-rule="evenodd" fill-rule="evenodd"></path> </g></svg>
      </div>
      <div class="text">
      <span>Click to upload image</span>
      </div>
      <input type="file" id="file" name="img_name" accept="image/*" required onchange="displaySelectedImage(this)">
      <img id="selected-image" src="" alt="Selected Image" class="img-fluid">

      </label>
      
      <div class="input-container">
      <label>Select Product</label>
      <select name="category" class="select-upload" style="select-upload" required>
      <option value="" selected="selected" style="display: none;">Select An Item From List</option>
    
                  <?php
                            require ('conn.php');

                            $sql = "SELECT * FROM main_products where product_category='Kitchen Accessories'";
                            $result = mysqli_query($conn,$sql);
 
                            if($result) {
                            while($row=mysqli_fetch_assoc($result)) {
 
                                $prod_name = $row['product_name'];
 
                                echo '<option value="'.$prod_name.'">'.$prod_name.'<br></option>';
                            }
                        }

                  ?>      
      </select>
      </div>

      <div class="input-container">
      <input type="text" name="prod_name" class="input" required>
      <label class="label">Product Name(Subname)</label>
      </div>
      
      <div class="input-container">
      <textarea name="prod_desc" class="input" style="width:100%;height:70px"></textarea>
      <label class="label">Product Description</label>
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

<script>
function displaySelectedImage(input) {
  var selectedImage = document.getElementById('selected-image');
  
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      selectedImage.src = e.target.result;
    };

    reader.readAsDataURL(input.files[0]);
  } else {
    selectedImage.src = ''; // Clear the image if no file is selected
  }
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
