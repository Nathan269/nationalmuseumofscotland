<!DOCTYPE html>
<html>
<head>
<title>National Museum of Scotland</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
<link rel="stylesheet" type="text/css" href="css/stylesTest2.css">
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
		</div>
			
	
<?php

ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

require('db/dbh.php');

if(isset($_POST['submit'])){
	
if(!empty($_POST['e_name']) && !empty($_POST['e_image']) && !empty($_POST['e_description']) && !empty($_POST['e_briefdescription']) && !empty($_POST['e_price']) && !empty($_POST['e_link'])){
	
	//escapes special characters in a string for use in an SQL statement

//$username = mysqli_real_escape_string($conn, $_POST['username']);
//$password = mysqli_real_escape_string($conn, $_POST['password']);

$e_name = $_POST['e_name'];
$e_image = $_POST['e_image'];
$e_description = $_POST['e_description'];
$e_briefdescription = $_POST['e_briefdescription'];
$e_price = $_POST['e_price'];
$e_link = $_POST['e_link'];


		
	$sql = "INSERT INTO exhibitions (e_name, e_image, e_description, e_briefdescription, e_price, e_link) VALUES (?,?,?,?,?,?)";

	$stmt = $conn->prepare($sql); //Prepare a SQL statement for execution
	
	$stmt->bind_param("ssssss", $e_name, $e_image, $e_description, $e_briefdescription, $e_price, $e_link); //Binds variables to a prepared statement as parameters
	
	$stmt->execute(); //Executes a prepared Query
	$stmt->close(); //Executes a prepared Query
	
	//redirect user to a confirmation page
	header("location: confirm.php");

	//close the connection when done

	$conn->close();
}
	
else{
	
	//email form field contains no value
die('No details included!'); //kill the database connection
 }	
}



?>
		
</div>
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