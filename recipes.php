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

        <!-- recipes section yha se start h -->

        <div class="contect">
          <h1>Recipes</h1>
        </div><br>
        <div>
          <img style="width: 500px; height: 500px; float: left;" src="mp.jpg">
          <h1 style="font-family: Arial; padding: 0px 0px 0px 530px;"><u>::Mater Paneer::</u></h1>
          <h2 style="font-family: Arial; padding: 0px 0px 0px 530px;"><u>Ingredients</u></h2>
          <p style="font-family: Arial; font-size: 17px; color: grey; padding: 0px 0px 0px 530px;" >
              2 large onions (cut into quarters),
              3 medium-sized tomatoes (cut into quarters),
              6 tablespoons vegetable oil (or canola or sunflower cooking oil, divided),
              1 pound paneer (cubed),
              1 tablespoon ginger paste,
              2 tablespoons garlic paste,
              1 teaspoon cumin powder,
              1/2 tsp turmeric powder,
              2 teaspoons garam masala,
              2 green chillies (finely chopped),
              1/2 pound shelled peas,
              1 1/2 cups water (hot),
              Salt (to taste),
              3 tablespoons heavy cream,
              Garnish: 1/3 cup fresh coriander leaves (finely chopped).
          </p>
          <h2 style="font-family: Arial; padding: 0px 0px 0px 530px;"><u>Step to make</u></h2>
          <p p style="font-family: Arial; font-size: 17px; color: grey; padding: 0px 50px 0px 530px;">
          <b>Step 1</b><br>
            Heat oil in a fry pan. Add the hing, jeera sabut, mace powder, minced onions and green chilies. Saute the veggies and cook till it turns pinkish in colour. Add ginger-garlic paste and saute again for 2-3 minutes. If you like the smoky flavour of garlic, stir fry it for some more time and add fresh tomato puree.<br>
          <b>Step 2</b><br>
            Stir well and add in the dry masalas except for the garam masala and salt to taste. Mix and saute till the sides start separating from the oil. Next add in peas and paneer. Mix it gently and add water. Adjust the spices and salt to taste. If you want to make the gravy aromatic, add the garam masala in the last step of cooking this recipe. Put the lid and let it cook.<br>
          <b>Step 3</b><br>
            Once the gravy starts boiling, add fresh cream. Besides, accentuate the taste of this dish by adding some garam-masala and stir well. Garnish this paneer dish with fresh coriander leaves, and serve it hot with Chapati, Naan, Butter tandoori roti, Jeera rice and Veg pulao.
          </p>
        </div>
          <hr style="height: 5px; background-color: black;">


        <div>
          <img style="width: 500px; height: 500px; float: right;" src="bp.jpg">
          <h1 style="font-family: Arial; padding: 0px 0px 0px 30px;"><u>::Bhelpri::</u></h1>
          <h2 style="font-family: Arial; padding: 0px 0px 0px 30px;"><u>Ingredients</u></h2>
          <p style="font-family: Arial; font-size: 17px; color: grey; padding: 0px 530px 0px 30px;" >
              3 cups puffed rice,
              1 handful peanuts (roasted and salted),
              2 potatoes (boiled, peeled, and chopped into tiny cubes),
              1 large onion (finely chopped),
              1 large tomato (finely chopped),
              1/2 bunch coriander (approximately 1/10 pound or 50 grams, finely chopped),
              2 chilies (green, finely chopped),
              Tamarind chutney (or Mint-coriander chutney, to taste),
              1 handful papdi (coarsely crushed),
              1 cup sev.
          </p>
          <h2 style="font-family: Arial; padding: 0px 0px 0px 30px;"><u>Step to make</u></h2>
          <p p style="font-family: Arial; font-size: 17px; color: grey; padding: 0px 530px 0px 30px;">
          <b>Step 1</b><br>
            Bhel Puri can be prepared in many ways and here’s a simple way of preparing this simple go-to recipe at home: Take a large bowl, mix the puffed rice, tomatoes, onions and cube potatoes in a large bowl, and mix them well.<br>
          <b>Step 2</b><br>
            Mix chopped green chillies, tamarind chutney, green chutney (made of coriander and mint) along with chaat masala and deggi chilli, and add it to the bowl.You can also add your favourite namkeen or veggie to make this dish a little more interesting. If you like it spicy you can add some black pepper powder to the mix.<br>

          <b>Step 3</b><br>
            Lightly crush and add the papad in the bowl. Now, add the sev and the remaining ingredients, and mix them well.Finally garnish with chopped coriander leaves, cucumber, roasted peanuts, ginger slices, pomegranate and lemon juice. Serve immediately.
          </p>
        </div><br>
      <hr style="height: 5px; background-color: black;">


      <div>
          <img style="width: 500px; height: 500px; float: left;" src="p.jpg">
          <h1 style="font-family: Arial; padding: 0px 0px 0px 530px;"><u>::Pizza::</u></h1>
          <h2 style="font-family: Arial; padding: 0px 0px 0px 530px;"><u>Ingredients</u></h2>
          <p style="font-family: Arial; font-size: 17px; color: grey; padding: 0px 0px 0px 530px;" >
              2 1/2 teaspoons active dry yeast,
              1/2 cup water (95 to 110 F),
              1/2 teaspoon sugar,
              1/2 teaspoon salt,
              1 tablespoon vegetable oil,
              1 1/2 cups all-purpose flour (approximately).
          </p>
          <h2 style="font-family: Arial; padding: 0px 0px 0px 530px;"><u>Step to make</u></h2>
          <p p style="font-family: Arial; font-size: 17px; color: grey; padding: 0px 50px 0px 530px;">
          <b>Step 1</b><br>
            To prepare pizza at home, wash the capsicum and slice it thinly in a bowl. Then, peel the onions and cut thin slices of it as well in another bowl. And finally, cut tomatoes and mushrooms in the same manner. However, make sure that that tomatoes have less juice in them. Now, grate the processed and mozzarella cheese in separate bowls.<br>

          <b>Step 2 </b><br>
            Then, take the pizza base and apply tomato ketchup all over. Spread half the processed cheese all over the base and evenly put the veggies all across the base. Once you have put all the veggies, put a thick layer of mozzarella cheese.<br>

          <b>Step 3</b><br>
            Put this pizza base in a baking tray and place it inside the oven. Let the pizza bake 10 minutes at 250 degree Celsius. Once done, take out the baking tray and slice the pizza. Sprinkle oregano and chilli flakes as per your taste and serve hot. (Note: Make sure that the oven is preheated at 250 degree Celsius for 5 minutes at least.)
          </p>
        </div>


        <div style="width: 100%;
  height: 100px;
  background-color:black;
  margin-top:100px;">
  <p class="cpt">Copyright @ 2019 TADKA spices</p1>
  <p class="wdb">Website Designed By || Shadow Brokers</p>

  </div>