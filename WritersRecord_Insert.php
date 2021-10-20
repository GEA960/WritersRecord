<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Insert</title>
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
             <a href="WritersRecord_Insert.php" class="logo">
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
            <a href="WritersRecord_Insert.php" class="logo">
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
            INSERT A WRITER RECORD
          </h1>
          <?php
          session_start();
          session_destroy();
          ?>
          <b>
          <form action="WritersRecord_Insert.php" method="POST">

          &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;Writer ID:<input type="text" name=WritersID><br>
          &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;Writer Name:<input type="text" name=Name><br>
          &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Age:<input type="text" name=Age><br>
          &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Address:<input type="text" name=Address><br>
          &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;Skills:<input type="text" name=Skills><br>
          &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;Specialization:<input type="text" name=Specialization><br>
          &emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;Academic Degree:<input type="text" name=AcademicDegree><br>
          Percentage Performance:<input type="text" name=PercentagePerformance><br>
          &nbsp;&nbsp;&nbsp;&nbsp;Date Employed (Y/M/D):<input type="text" name=DateEmployed><br>
          &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;Feedback:<input type="text" name=Feedback><br>
          <li></li>
          <input type="submit" name="Submit">
  
          </form>


</b>
<!Make a MySQL Connection>
<!server>

<?php

ini_set('display_errors',1);
error_reporting(E_ALL & ~E_NOTICE);


$WritersID=$_POST['WritersID'];
$Name=$_POST['Name'];
$Age=$_POST['Age'];
$Address=$_POST['Address'];
$Skills=$_POST['Skills'];
$Specialization=$_POST['Specialization'];
$AcademicDegree=$_POST['AcademicDegree'];
$PercentagePerformance=$_POST['PercentagePerformance'];
$DateEmployed=$_POST['DateEmployed'];
$Feedback=$_POST['Feedback'];

mysql_connect("localhost", "root", "") 
or die("Not connected to the server");
print"<font color='red'>Connected to the server</font>";
echo"<br>";
mysql_select_db("db_writers") 
or die("Not connected to the database");
echo"Connected to the database";

mysql_query("INSERT INTO tb_writersrecord(WritersID, Name,
Age,Address, Skills, Specialization, AcademicDegree, PercentagePerformance, DateEmployed, Feedback) 
VALUES 
('$WritersID','$Name','$Age','$Address', 'Skills', 'Specialization', 'AcademicDegree', 'PercentagePerformance', 'DateEmployed', 'Feedback')")
or die("<br>Data Not Inserted");
echo"<br>Data Inserted";

?>
          
          <!-- white full width arrow object -->
        <img class="arrow-object" src="img/arrow-object-white.svg" alt="">
        </header>
        
        
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script> 
  </body>
</html>