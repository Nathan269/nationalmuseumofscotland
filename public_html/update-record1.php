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
			
		<h3>You have successfully accessed the admin editor! You can now make changes to the products list if you wish.</p><br>
						
		</div>
		
		
<?php
include('db/dbh.php');
/*declaring and assigning values to variables using the
$_POST method. These values are received from the form
fields.*/
$product_id = $_POST['product_id'];

$e_name = $_POST['e_name'];

$e_image = $_POST['e_image'];

$e_description = $_POST['e_description'];
		
$e_briefdescription = $_POST['e_briefdescription'];

$e_price = $_POST['e_price'];

$e_link = $_POST['e_link'];

if(isset($product_id)){ //does $recordID contain a value
	
/*update MySQL statement using the record ID to identify and
update a unique record.*/
	
$sql = mysqli_query($conn, "UPDATE exhibitions SET e_name =
'$e_name', e_image='$e_image', e_description='$e_description', e_briefdescription='$e_briefdescription', e_price='$e_price', e_link='$e_link' WHERE
product_id='$product_id'")or die('Error: '.mysqli_error());
}
// close the connection when done
mysqli_close($conn);
/*redirect the user back to view.php to see the changes to a
record*/
header( 'Location: viewAll.php' ) ;
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
</div>

<?php
	include 'footer/footer.php';
?>
	

<script src="javascript/slideshow.js"></script>
</body>
</html>