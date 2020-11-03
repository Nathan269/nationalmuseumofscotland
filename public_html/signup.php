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
<link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="javascript/comments.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	
<?php
	include 'header/header.php';
?>
	
<div class="main-wrapper">
  <div class="wrapper">
    
    <div class="main-content">

		<section class="main-container"> 
		<div class="main-wrapper">
			<h2>Register your Account</h2>
			<form class="signup-form" action="includes/signup.inc.php" method="POST">
				<input type="text" name="first" placeholder="Firstname"><br><br>
				<input type="text" name="last" placeholder="Lastname"><br><br>
				<input type="text" name="email" placeholder="E-mail"><br><br>
				<input type="text" name="uid" placeholder="Username"><br><br>
				<input 	type="password" name="pwd" placeholder="Password"><br><br>
				<button type="submit" name="submit">Sign up</button>
			</form>
		</div>
	</section>
	</div>
	<div class="main-sidebar">
		
		<h2>Steps</h2>
		
		<ui>
		<li>Fill out the entire form.</li><br>
		<li>Your account will be added to our system.</li><br>
		<li>You can sign in to the admin page by using either your email and password or username and password.</li><br>
		<li>You can make changes to the exhibition information if you feel that it is neccessary.</li>
		</ui>
		
			
    
    </div>
	  
	</div>		
</div>
		
		
		
    
 
<?php
	include 'footer/footer.php';
?>
	

<script src="javascript/slideshow.js"></script>
</body>
</html>