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
		
		<h1>Admin Editor</h1>
			
		<h3>You have successfully deleted the record!</p><br>
			
		<?php
//connect to the database
//check whether an ID has been sent
	
if(isset($_GET['product_id'])){
	
	include('db/dbh.php');
	
	$product_id = $_GET['product_id'];
	
	echo $product_id; //get variable value - for testing only
	
	echo "The data type is".gettype($product_id); //get variable datatype - for testing only
	
	$sql = "DELETE FROM exhibitions WHERE product_id = ?";
	
	$stmt = $conn->prepare($sql); //Prepare the SQL statement for execution
	
	$stmt->bind_param("s", $product_id); //Binds variables to the prepared statement
	
	$stmt->execute(); //Executes the prepared Query
	
	header("Location: adminsuccess.php");
	
}
	
	else{
		
		echo "Error deleting record: " . $conn->error;
	}

?>		
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