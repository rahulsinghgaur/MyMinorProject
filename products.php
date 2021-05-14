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

  <!-- popup section yha se start h  -->

        <div id="popupmain" style="display: none;">
  <div id="popup">
    <img src="m.gif" style="width: 200px; height: 300px; margin-top: 7px; margin-left: -15px;">
    <h1 id="ask"> CAN I HELP YOU.</h1>
    <input type="text" name="" id="finder"><br>
    <button class="btns" style="margin-left: 195px;">SEARCH</button>
    <button class="btns" style="margin-left: 10px;">NO THANKS</button>
  </div>
</div>

        <script src="jquery-3.3.1.min.js"></script>
<script>
  $(document).ready(function() {
    setTimeout(function(){
      $('#popupmain').css('display','block'); }, 5000);
  });

  $('.btns').click(function(){
    $('#popupmain').css('display','none');
  });
</script>


        <!-- popup section end -->
        
<div id="wrapper">
  <div id="subheader">
      <div class="container">
         <p>A Variety of spices.</p>
               <a href="#">Help</a>   <a href="#">Download App</a>  <a href="#">Consumer </a>   <a href="#">Guest </a>
      </div>
  </div>
    <!-------------=========main header==================---------------------------->
    <div id="main-header">
         <!----------------============-==logo==============--------->
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

        <!-- products section yha se start h -->


        <div class="contect">
          <h1>Products</h1>
        </div>
        <div id="heading-block">
           <h2>PURE SPICES</h2>
          </div>
<div>
  <img style="width: 350px; height: 400px;" src="m1.jpg">
  <img style="width: 350px; height: 400px;" src="m2.jpg">
  <img style="width: 350px; height: 400px;" src="m3.jpg">
  <img style="width: 350px; height: 400px;" src="m4.jpg">
  <a href="#"><u>MORE-></u></a>
</div>
<div id="heading-block">
           <h2>VEG SPICES</h2>
          </div>
          <div>
  <img style="width: 350px; height: 400px;" src="m5.jpg">
  <img style="width: 350px; height: 400px;" src="m6.jpg">
  <img style="width: 350px; height: 400px;" src="m7.jpg">
  <img style="width: 350px; height: 400px;" src="m8.jpg">
  <a href="#"><u>MORE-></u></a>
</div>
  <div id="heading-block">
           <h2>NON-VEG SPICES</h2>
          </div>
          <div>
  <img style="width: 350px; height: 400px;" src="m9.jpg">
  <img style="width: 350px; height: 400px;" src="m10.jpg">
  <img style="width: 350px; height: 400px;" src="m11.jpg">
  <img style="width: 350px; height: 400px;" src="m12.jpg">
  <a href="#"><u>MORE-></u></a>
</div>

</div>
  <div style="width: 100%;
  height: 100px;
  background-color:black;
  margin-top:50px;">
  <p class="cpt">Copyright @ 2019 TADKA spices</p1>
  <p class="wdb">Website Designed By || Shadow Brokers</p>

  </div>