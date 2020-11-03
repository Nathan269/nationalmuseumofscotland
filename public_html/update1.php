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
			
			<h3>You're now editing a record within the database!</p>
			
		</div>
		
			<?php

include ('db/dbh.php');

$product_id = $_GET['product_id'];// gets ID from the URL string

if(isset($product_id)){
	
	$sql = mysqli_query($conn, "SELECT * FROM exhibitions WHERE product_id='$product_id'")or die('Query error. Try again:'.mysqli_error());
	
	$row = mysqli_fetch_array($sql);
	
	echo "You're updating record: ".$product_id;//Testing purposes only
}

else{
	
	echo "Problem with record update.";
}

?>	
		
		
	 <form action = "" method = "POST" enctype = "multipart/form-data">
		  
		  <p>Choose an image for your product:</p>
		  
         <input type = "file" name = "image" /><br><br>
         <input type = "submit"/>
			
         <ul>
            <li>Sent file: <?php echo $_FILES['image']['name'];  ?>
            <li>File size: <?php echo $_FILES['image']['size'];  ?>
            <li>File type: <?php echo $_FILES['image']['type'] ?>
         </ul><br><br>
			
      </form>
			
			<form action="update-record1.php" method="POST"> <input type="hidden" name="product_id" value="<?php echo
$row['product_id']; ?>" />
	
<label for="e_name">Product Name:</label>
<input type="text" name="e_name" value="<?php echo $row['e_name']?>" /><br><br>
					
<label for="e_image">Image (Copy and paste the "Sent file"):</label>
<input type="text" name="e_image" value="<?php echo
$row['e_image'] ?>" /> <br><br>
	
<label for="e_description">Description:</label>
<input type="text" name="e_description" value="<?php echo $row['e_description'] ?>" /><br><br>
				
<label for="e_briefdescription">Brief Description:</label>
<input type="text" name="e_briefdescription" value="<?php echo $row['e_briefdescription'] ?>" /><br><br>
	
<label for="e_price">Price:</label>
<input type="text" name="e_price" value="<?php echo $row['e_price'] ?>" /><br><br>
	
<label for="e_linkr">Link:</label>
<input type="text" name="e_link" value="<?php echo $row['e_link'] ?>" /><br><br>
	
<input type="submit" value="Update Record" />
</form>
	</div>
	
	
	<div class="main-sidebar">
		
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