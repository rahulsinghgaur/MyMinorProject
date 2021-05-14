<?php 
  session_start(); 

  
?>
<!DOCTYPE html>
 <html>
<head>
     <title>::Online Spices::</title>
     <link href="munna.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="wrapper">
  <div id="subheader">
      <div class="container">
         <p>A Variety of spices.</p>
               <a href="#">Help</a>   <a href="#">Download App</a>  <a href="#">Consumer </a>   <a href="#">Guest </a>
      </div>
  </div>
    <!-------------=========main header==================---------------------------->
    <div id="main-header">
         <!----------------=============-==logo==============--------->
        <div id="logo">
            <span id="ist">Tadka</span>
          </div>
         <!------------------============search area===========---------->
           <div id="search">
                     <form action="">
                                     <input class="search-area" type="text" name"text" placeholder="Search for Products, spices and More"></input>
                                     <input class="search-btn" type="submit" name="submit" value="SEARCH"></input>
                       </form>
            </div>
          <!--==user-menu==-->
            <div id="user-menu">
                <li><a href="#">Cart</a></li>
          <li><a href="logout.html"><?php  if (isset($_SESSION['username'])) : ?>
                <?php echo"Hi,"; ?>
                <?php echo $_SESSION['username']; ?>
                <?php endif ?></a>
             <a href="login.php"><?php  if (!isset($_SESSION['username'])) : ?>
                <?php echo"Login"; ?>
                <?php endif ?></li></a>
            </div>
       </div>
    
     <!------------------------------=============navigation bar=================------------------------------>
        <div id="navigation">
            <nav>
                 <a class="homeblack" href="index.php">HOME</a>
                 <a class="homeblack" href="products.php">PRODUCTS</a>
                 <a class="homeblack" href="recipes.php">RECIPES</a>
                 <a class="homeblack" href="contectus.php">CONTACT US</a>
                 <a class="homeblack" href="aboutus.php">ABOUT US</a>
                 
           </nav>
        </div>
        <div id="divider"></div>
        <br>
<!--yha se contact us ka system suru h-->



        <div class="contect">
          <h1>Contect Us</h1>
        </div>
        <h1 class="mm">Make an enquiry</h1>
        <p class="pp">Just to serve you better please provide us following details</p>
        <form class="form">
          Your Name (required)<br>
          <input class="i" type="text" name="text"><br>
          Your Email (required)<br>
          <input class="i" type="text" name="text"><br>
          Your Mobile<br>
          <input class="i" type="text" name="text"><br>
          Subject<br>
          <input class="i"type="text" name="text"><br>
          Your Message<br>
          <textarea rows="10"cols="50"></textarea><br>
          <input class="btn" type="submit" name="submit" value="SEND">
          <input class="btn" type="reset" value="RESET"></input>
          <input class="btn" type="button"value="CANCEL"></input> 
        </form>

        <div class="coninfo">
          <h1>Contact Information</h1>
          <p>SITM,<br>
            Somya group of institutes,<br>
            AB Road, Myana,<br>
            Guna-473001,(M.P.)<br>
            India<br>
            <br>
            <br> Phone:+(91)1234567890,
            <br>       +(91)0987654321<br>
            <br>
            Email:shadow@spices.com
              </p>
          
        </div>

        <div class="last">
  <p class="cpt">Copyright @ 2019 TADKA spices</p1>
  <p class="wdb">Website Designed By || Shadow Brokers</p>

  </div>