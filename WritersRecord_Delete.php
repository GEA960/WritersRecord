<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Deleting</title>
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
             <a href="WritersRecord_Delete.php" class="logo">
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
               <li><a href="WritersRecord_Update.php">Update</a></li>
               <li><a href="WritersRecord_Insert.php">Insert</a></li>
                <li><a href="WritersRecord_View.php">View</a></li>
                <li><a href="WritersRecord_InsertAndView.php">Insert and View</a></li>
             </ul>
          </div>
          
          <!-- logo -->
          <ul class="logo-menu">
            <a href="WritersRecord_Delete.php" class="logo">
              <!-- Logo White Version -->
              <img class="logo-white" src="img/logo.svg" alt="">
              <!-- Logo Dark Version -->
              <img class="logo-dark" src="img/logo-dark.svg" alt="">
            </a>
          </ul>
          
          <!-- right menu items -->
          <div class="top-nav right-menu">
             <ul class="top-ul chevron">
                <li><a href="WritersRecord_Delete.php">Delete Record</a></li>
                 <li><a href="WritersRecord_Sort.php">Sort</a></li>
                <li><a href="WritersRecord_Search.php">Search</a></li>
                <li><a href='WritersRecord_LogOut.php'>LogOut</a></li>
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
            Delete a Writer's Record
          </h1>
          
          <!-- white full width arrow object -->
          <img class="arrow-object" src="img/arrow-object-white.svg" alt="">
        </header>
        <li> </li>

        <head><title>Delete Record</title></head>

<body bgcolor=yellow> <font face= "arial black" color = black>
  <?php
session_start();
session_destroy();
?>
<form action="WritersRecord_delete.php" method="POST">

<center>Writer ID to delete: &nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="WritersID"><br>
<input type="Submit" value="Submit"><br><br><br>
</form>
<table border="3">


<?php

ini_set('display_errors',1);
error_reporting(E_ALL & ~E_NOTICE);

$WritersID=$_POST['WritersID'];

mysql_connect("localhost","root","")or die("localhost Not Connected");

mysql_select_db('db_writers') or die ("Database Not Selected");

mysql_query("DELETE FROM tb_writersrecord WHERE WritersID ='$WritersID'") or die ("Data Not Deleted"); 



$result=mysql_query("SELECT * FROM tb_writersrecord") or die ("Could not find record in Database");





?>

      
      <hr class="break">
      
    
  </body>

  <!-- FOOTER -->
    <footer>
      <!-- Social -->
      <div class="background-primary padding text-center">
        <a href="/"><i class="icon-facebook_circle text-size-25 text-dark"></i></a> 
        <a href="/"><i class="icon-twitter_circle text-size-25 text-dark"></i></a>
        <a href="/"><i class="icon-google_plus_circle text-size-25 text-dark"></i></a>
        <a href="/"><i class="icon-instagram_circle text-size-25 text-dark"></i></a> 
        <a href="/"><i class="icon-linked_in_circle text-size-25 text-dark"></i></a>  

         <!-- Section 4 -->
      <section>
        <div class="line">
          <div class="s-12 m-12 l-9 center margin-bottom-30">
            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-10">WRITERS DATA RECORDS</h3>
            <p>The list of all writers.</p>
          </div>
        </div>            
        <div class="line">  
          
        </div>
      </section>                                                                            
      </div>
     
    </footer>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script> 

<?php
 echo"<table border=1><tr>";
echo"<td>WritersID</td><td>Name</td><td>Age</td><td>Address</td><td>Skills</td><td>Specialization</td><td>AcademicDegree</td><td>PercentagePerformance</td><td>DateEmployed</td><td>WritingExperienceYears</td><td>Feedback</td></tr>";

while($row=mysql_fetch_assoc($result))
{
echo"<tr><td>".$row['WritersID'];
echo"</td><td>".$row['Name'];
echo"</td><td>".$row['Age'];
echo"</td><td>".$row['Address'];
echo"</td><td>".$row['Skills'];
echo"</td><td>".$row['Specialization'];
echo"</td><td>".$row['AcademicDegree'];
echo"</td><td>".$row['PercentagePerformance'];
echo"</td><td>".$row['DateEmployed'];
echo"</td><td>".$row['WritingExperienceYears'];
echo"</td><td>".$row['Feedback'];
echo"</td></tr>";

}    

?>

</html>