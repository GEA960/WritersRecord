<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Main Menu</title>
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="css/lightcase.css">
    <!-- CUSTOM STYLE -->      
    <link rel="stylesheet" href="css/template-style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,700,900&amp;subset=latin-ext" rel="stylesheet"> 
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
  </head>
  
  <body class="size-1280">
   
    <!-- HEADER -->
    <header role="banner" class="position-absolute">    
      <!-- Top Navigation -->
      <nav class="background-transparent background-primary-dott full-width sticky">          
        <div class="top-nav"> 
          <!-- mobile version logo -->              
          <div class="logo hide-l hide-xl hide-xxl">
             <a href="WritersRecord_MainMenu.html" class="logo">
              <!-- Logo White Version -->
              <img class="logo-white" src="img/logo.svg" alt="">
              <!-- Logo Dark Version -->
              <img class="logo-dark" src="img/logo-dark.svg" alt="">
            </a>
          </div>                  
          <p class="nav-text"></p>



          
          <!-- left menu items -->
          <div class="top-nav left-menu">
             <ul class="right top-ul chevron">
              <li></li>
               <li><a> </a></li>
                <li><a></a></li>
                <li><a></a></li>
             </ul>
          </div>
          
          <!-- logo -->
          <ul class="logo-menu">
            <a href="WritersRecord_MainMenu.php" class="logo">
              <!-- Logo White Version -->
              <img class="logo-white" src="img/logo.svg" alt="">
              <!-- Logo Dark Version -->
              <img class="logo-dark" src="img/logo-dark.svg" alt="">
            </a>
          </ul>
          
          <!-- right menu items -->
          <div class="top-nav right-menu">
             <ul class="top-ul chevron">
                <li><a></a></li>
                 <li><a></a></li>
                <li><a></a></li>
             </ul> 
          </div>
        </div>
      </nav>
    </header>
    
    <!-- MAIN -->
    <main role="main">
      <article>    
        <!-- Header -->
        <header class="section background-image text-center" style="background-image:url(img/carousel-02.jpg)">
          <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
            

<hr class="break">

   <section>
<?php
session_start();
session_destroy();
?>
<center>Main Menu</center>
<br><br>

<b>
<a href="WritersRecord_Insert.php">Adding Record </a> <br><br>

<a href="WritersRecord_Update.php">Updating Record </a><br><br>

<a href="WritersRecord_InsertAndView.php">Adding and Viewing Record </a><br><br>

<a href="WritersRecord_Delete.php">Deleting Record </a><br><br>

<a href="WritersRecord_Search.php">Searching Record </a> <br><br>

<a href="WritersRecord_View.php">Viewing Record </a><br><br>

<a href="WritersRecord_Sort.php">Sorting Record </a><br><br>

</b>

<br><br><a href='WritersRecord_LogOut.php'>LogOut</a>
</section>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script> 
  </body>
</html>