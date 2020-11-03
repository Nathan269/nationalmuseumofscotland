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
</head>
<body>
	
<?php
	include 'header/header.php';
?>
	
<div class="main-wrapper">
  <div class="wrapper">
    
    <div class="main-content">
		
	<section> 
			<h2>Admin Page</h2>
			
			<p>Login to your account that you have created to access to admin page. Once logged into your account you will be able to edit products, add products and delete products.</p>
		
		<?php
				if (isset($_SESSION['u_id'])) {
					echo "You are logged in!";
				}
		?>
		
		<?php
					if (isset($_SESSION['u_id'])) {
						echo '<form action="includes/logout.inc.php" method="POST"> 
						<button type="submit" name="submit">Logout</button>
						</form>';
					} else {
						echo 
							
						'<form action="includes/login.inc.php" method="POST">
						<input type="text" name="uid" placeholder="Username/e-mail"><br><br>
						<input type="password" name="pwd" placeholder="password"><br><br>
						<button type="submit" name="submit"> Login</button>
						</form><br>
						<form action="signup.php" method="POST"> 
						<button type="submit" name="submit">Register</button>
						</form>';
					}
		
?>

	    <?php
				if (isset($_SESSION['u_pwd'])) {
					echo "You are logged in!";
				}
		?>
  </div>
	  	  <div class="main-sidebar3">
		
		<h2>Have an account?</h2>
			  
		<p>If you already have an account with us, simply login to your account if you would like to make changes to the database information.</p>
			  
		<h2>Don't have an account?</h2>
			  
		<p>If you don't have an account with us, you can sign up for one by clicking on the "register" button which will redirect you to a sign up page.</p>
			  
		<h2>Why you should set up an account with us.</h2>
			  
		<p>The main purpose of this website is to educate people intellectually. If you any additional information comes out about these exhibitions that had never been discovered before, you will be able to add this additional information to the exhibtion pages.</p>
    </div>
</div>
	</div>
	
<?php
	include 'footer/footer.php';
?>
</body>
</html>