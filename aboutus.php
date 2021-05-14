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



  <!-- about us section yha se start h -->

<div class="contect">
          <h1>About Us</h1>
        </div>

        <div style="margin-left: 30px;">
          <h1 style="font-family: Ravie">Tadka</h1>
            <hr style="height: 5px; background-color: black;">
          <h3>
            TADKA Today has a range of 62 products available in over 150 different packages. Designed to cater to the varied needs of consumers all over the world.
          </h3>
          
          <p style="font-family: Arial">TADKA Pvt. Ltd. has set of five state of art plants for meeting the ever growing demand. The company procures raw material directly from the centers of produce to mantain uniform test and quality.
          <br> The raw material first cleaned, dried and tested with the help of special machines. It is then carefully grounded into the finished product passing through various stages. Fully automatic machines have been installed for this process.<br>
        
          <br>  Today TADKA spices and blends are popular not just in India but also around the world and the products are being exported to the United States of America, Canada, United Kingdom, Europe, South East Asia, Japan, U.A.E. and Saudi Arabia. Company have own offices in London (U.K.) and a state of art manufacturing unit at Sharjah (U.A.E.).<br>

           <br> During its 5 years of golden performance, TADKA wishes to pay a tribute to its associates, workers and wellwishers, stockists and dealers for their contribution in this glorious achievement and further wishes to shareits joys with every house-hold in the country and abroad.<br>
           <br>
        With all humility TADKA invites you to join in this on-going march towards greater heights of achievements and seeks your continuos support in its endeavout to make yet greater achievements possible.
          </p>

          <h1>FOLLOW US</h1>
          <img style="width: 40px; height: 40px;" src="insta.png">
          <img style="width: 40px; height: 40px;" src="facebook.png">
          <img style="width: 40px; height: 40px;" src="youtube.jpg">
          <img style="width: 40px; height: 40px;" src="in.png">
          <img style="width: 40px; height: 40px;" src="sky.png">
          <img style="width: 40px; height: 40px;" src="pi.jpg">
          <img style="width: 40px; height: 40px;" src="rss.png">
          <img style="width: 40px; height: 40px;" src="twt.png"><br>
          
        </div>
        <div class="last">
  <p class="cpt">Copyright @ 2019 TADKA spices</p1>
  <p class="wdb">Website Designed By || Shadow Brokers</p>

  </div>
        <img style="width: 100%; height: 330px; float: left; margin-top: -440px; " src="add.jpg">
          
  
