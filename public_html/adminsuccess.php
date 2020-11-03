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
		
		<div class="searchform">

		<h1>Admin Editor</h1>
		<h3>You have successfully accessed the admin editor! You can now make changes to the products list if you wish.</p>
			
		</div>
			<div class="article-container2">
<table id="customers">
	<tr id="customers2">
		<th colspan="1.5">ID</th>
		<th colspan="1.5">Exhibition Name</th>
		<th colspan="1.5">Price</th>
		<th colspan="1.5">Delete</th>
		<th colspan="1.5">Update</th>

	</tr>
	
	
<?php
		include('includes/dbh.php');
	
		if($stmt = $conn->prepare("SELECT product_id, e_name, e_description, e_briefdescription, e_price, e_link  FROM exhibitions")) {
			
			$stmt->bind_result($product_id, $e_name, $e_description, $e_briefdescription, $e_price, $e_link);
			
			$stmt->execute();
			
			while ($stmt->fetch()){
				
				//Because $username, $password, $level, $xp and $avatar are passed by reference, their value changes on every iteration to reflect the current row
				
				echo 
					
				"<tr><th colspan='1.5';>".$product_id."</th>".
				"<th colspan='1.5';>".$e_name."</th>".
				"<th colspan='1.5';>£".$e_price."</th>".
				
				"<th colspan='1.5';><a href='deleterecord.php?product_id=".$product_id ."'>Delete</a></th>
				
				<th colspan='1.5';><a href='update1.php?product_id=".$product_id ."'>Update</a></th>
				
				</tr>";
			}
			
			$stmt->close();
			
		}
		
		else{
			
			echo "No data returned";
		}
		
	?>
	</table>
	</div>
	</div>
	<div class="main-sidebar3">
		
		<h2>Admin Powers</h2>
		
		<ui>
		<li>You can edit any of the exhibition information.</li><br>
		<li>You can delete any of the exhibitions</li><br>
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