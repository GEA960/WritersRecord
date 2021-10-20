<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log In</title>
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
             <a class="logo">
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
            <a class="logo">
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
           LogIn on your Account
<center>  

          <?php
ini_set('display_errors',1);
error_reporting(E_ALL & ~E_NOTICE);

session_start();
session_destroy();

session_start();

//connect to the server 
mysql_connect("localhost", "root", "") 
or die("Not connected to the server<br>");
//print"Connected to the server<br>";
print"<br>";


//select database
mysql_select_db("db_writers") 
or die("Not connected to the database<br>");
//echo"Connected to the database<br>";

$username=$_POST['Username'];
$password=$_POST['Password'];

if($username && $password)
{

//select the username to query
 $query=mysql_query("SELECT * FROM tb_user WHERE Username='$username'");
 $numrows=mysql_num_rows($query);
  
  
 if ($numrows!=0){
   while($row=mysql_fetch_array($query)){
     $dbusername=$row['Username'];
     $dbpassword=$row['Password'];
	}
	if($username==$dbusername && $password == $dbpassword)
{
  echo"<br><br>Welcome, <font size='10' face='Arial'> <font color='red'><b>$username!<b></font>";
  $_SESSION['Username']=$username;
echo "<br><br><a href='WritersRecord_MainMenu.php'>Main Menu</a>";
echo "<br><br><a href='WritersRecord_LogOut.php'>Logout</a>";
  
 }
 else
   echo" <font color='red'>incorrect pasword!</font>";

} 
else
{
 echo ("<font color='red'><br>that user does not exist!</font> <br><br>Click here to try again:<a href='index.php'>Login</a>"); 
}

}
?>
</center>

          </h1>



 <!-- white full width arrow object -->
          <img class="arrow-object" src="img/arrow-object-white.svg" alt="">
        </header>
<hr class="break">
   
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script> 
  </body>
</html>




