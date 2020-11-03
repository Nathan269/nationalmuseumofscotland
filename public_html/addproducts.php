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
			
			<h3>You have successfully accessed the admin editor! You can now make changes to the products list if you wish.</p><br>
			
			<a href="addproducts.php">Add New Exhibition</a><br><br>
		</div>
		
		
		<?php
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>
	
	<section class="main-container"> 
		<div class="main-wrapper">
			<h2>Add New Product</h2>
			
			
	  <form action = "" method = "POST" enctype = "multipart/form-data">
		  
		  <p>Choose an image for your product:</p>
		  
         <input type = "file" name = "image" />
         <input type = "submit"/>
			
         <ul>
            <li>Sent file: <?php echo $_FILES['image']['name'];  ?>
            <li>File size: <?php echo $_FILES['image']['size'];  ?>
            <li>File type: <?php echo $_FILES['image']['type'] ?>
         </ul><br><br>
			
      </form>
			
			<form action="data-collect.php" method="post" name="data-collect">
					
	<label for="e_name">Product Name:</label>	
	<input type="text" name="e_name" id="e_name"><br><br>
				
	<label for="e_image">Image (Copy and paste the "Sent file"):</label>	
	<input type="text" name="e_image" id="e_image"><br><br>
				
	<label for="e_description">Product Description:</label>
	<input type="text" name="e_description" id="e_description"><br><br>
				
	<label for="e_briefdescription">Product Description:</label>
	<input type="text" name="e_briefdescription" id="e_briefdescription"><br><br>
				
	<label for="e_price">Price:</label>	
	<input type="text" name="e_price" id="e_price"><br><br>
				
	<label for="e_seller">Link:</label>	
	<input type="text" name="e_link" id="e_link"><br><br>
		
	<input type="submit" name="submit" id="submit" value="Send new product to database">
		
	</form>
	</div>
	</section>
			
	</div>
	  <div class="main-sidebar">
		
		<h2>Admin Powers</h2>
		
		<ui>
		<li>You can edit any of the exhibition information.</li><br>
		<li>You can delete any of the exhibitions</li><br>
		</ui>
	
    </div>
	</div>
	
	 
		
		
		
		
    
 
<?php
	include 'footer/footer.php';
?>
	

<script src="javascript/slideshow.js"></script>
</body>
</html>