<?php
/* [INIT - GET PRODUCTS] */
require __DIR__ . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "2a-config.php";
require PATH_LIB . "2b-lib-db.php";
require PATH_LIB . "3a-lib-products.php";
$pdtLib = new Products();
$products = $pdtLib->get();

/* [HTML] */ ?>
<!DOCTYPE html>
<html>
<head>
<title>National Museum of Scotland</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
<link rel="stylesheet" type="text/css" href="css/stylesTest3.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="javascript/app.js"></script>
<script src="public/4a-cart.js"></script>
<link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
</head>
<body>
	
<?php
	include 'header/header.php';
?>
	
<div class="main-wrapper">
  <div class="wrapper">
    
    <div class="main-content">
		
		<h2>Booking Page</h2>
		
		<header id="page-header">
      Shopping Cart 
      <!-- [CART BUTTON] -->
      <div id="page-cart-icon" onclick="cart.toggle();">
        &#128722; <span id="page-cart-count">0</span>
		  
		  <!-- [CART] -->
   
      </div> 
			 
	 <div id="page-cart" class="ninja"></div>
    </header>
		
			
		<div id="page-products">
		<p>Add any of the exhibitions you please to go to by clicking the "Add to cart" button and then select the quantity of tickets you would like:</p>
		<?php
      		if (is_array($products)) {
        	foreach ($products as $id => $row) { 
		?>
          <div class="pdt">
            <img class="image1" src="images/<?= $row['e_image'] ?>"/>
		 <div class='article-box2'>
            <h3 class="pdt-name"><?= $row['e_name'] ?></h3>
            <div class="pdt-price">£<?= $row['e_price'] ?></div>
            <div class="pdt-desc"><?= $row['e_briefdescription'] ?></div><br>
            <input class="pdt-add" type="button" value="Add to cart" onclick="cart.add(<?= $row['product_id'] ?>);"/><br><br>
          </div>
		</div>
		<br><br>
        <?php }
      } else {
        echo "No products found.";
      }
      ?></div>
  </div>
	  	  <div class="main-sidebar3">
					  
			 <h2>Booking Information</h2>
			 
			 <p>Once you have ordered your ticket(s), you can use them when entering the museum at any date within the next year.This will allow you to choose the best date that suits you.</p>
			 
			 <p>If you have any enquiries about returns or ticket information you can contact us through our contact page. </p>
			 
			 <p>You can purchase tickets for multiple exhibitions if you please to.</p>
			 
    </div>
</div>
	</div>
	
<?php
	include 'footer/footer.php';
?>
</body>
</html>