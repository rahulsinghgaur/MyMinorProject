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
          <li><a href="logout.php"><?php  if (isset($_SESSION['username'])) : ?>
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
      
      <!-----------==========Image Floating=============-------------->
      <center>
    <div id="outerbox">
      <div id="sliderbox">
        <img src="22.jpg" height="300px" width="1280px">
        <img src="23_0.jpg" height="300px" width="1280px">
        <img src="cooking-spices.jpg" height="300px" width="1280px">
        <img src="1.jpg" height="300px" width="1280px">
      </div>
    </div>
  </center>
      
     
      <!-----------------==========category boxes==============---------------------------->
        <div class="container">
          <div id="heading-block">
           <h2>Category</h2>
          </div>  
          <!---------------===============1st catbox=============---------------------->
             <a href="#">
                <div class="catbox">
                <img src="12.jpg" alt="Ground-Spices" height="250" width="250"></img>
                <span>Ground Spices</span>
               </div>
        </a>
          <!-------------------------============2nd catbox==========------------------------>
            <a href="#">
               <div class="catbox">
               <img src="img_3832.jpg" alt="Blend-Spices" height="250" width="250"></img>
                <span>Blend Spices</span>
              </div>
        </a>
          <!--------------------=================3rd catbox===============---------------->
             <a href="#">
                <div class="catbox">
                <img src="98.jpg" alt="Powdered-Spices" height="250" width="250"></img>
               <span>Powdered Spices</span>
               </div>
        </a>
           <!----------------------=============4th catbox================------------------->
            
</div>
  <div class="last">
  <p class="cpt">Copyright @ 2019 TADKA spices</p1>
  <p class="wdb">Website Designed By || Shadow Brokers</p>

  </div>
   <script src="js/jquery.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script src="js/my.js"></script>

  
</body>

</html> 
