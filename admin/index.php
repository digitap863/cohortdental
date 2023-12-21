<?php
include "conn.php"; 
session_start();

if (isset($_SESSION['username'])) {

?>

<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Sidebar</title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

      <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" href="css/style2.css">


      <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
       

          <?php include 'nav.php'; ?>

          <div class="heading">
            <h3 style="font-size:20px;margin-top:0;padding:18px">Admin Dashboard - Cohert</h3>
          </div>  
      
  <script src="main.js"></script>        
  <script>          
const expand_btn = document.querySelector(".expand-btn");

let activeIndex;

expand_btn.addEventListener("click", () => {
  const iconImage = expand_btn.querySelector('img');

  document.body.classList.toggle("collapsed");
});

const current = window.location.href;

const allLinks = document.querySelectorAll(".sidebar-links a")

allLinks.forEach((elem) => {
  elem.addEventListener('click', function() {
    const hrefLinkClick = elem.href;    

    allLinks.forEach((link) => {
      if (link.href == hrefLinkClick){
        link.classList.add("active");
      } else {
        link.classList.remove('active');
      }
    });
  })
});
  </script>

  <script>
// JavaScript
  document.addEventListener("DOMContentLoaded", function () {
    const hasSubmenuItems = document.querySelectorAll(".has-submenu");

    hasSubmenuItems.forEach((item) => {
      const submenu = item.querySelector(".submenu");

      // Initially hide submenu
      submenu.style.display = "none";

      item.addEventListener("click", function () {
        // Toggle the class to show/hide submenu
        this.classList.toggle("active");

        // Toggle the display of the submenu
        if (submenu.style.display === "none") {
          submenu.style.display = "block";
        } else {
          submenu.style.display = "none";
        }
      });
    });
  });

  </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>

<?php 
} else {
    header("location: login.php");
} 
?>