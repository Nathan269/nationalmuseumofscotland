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
	
<?php

include 'db/dbh.php';

?>

<div class="main-wrapper">
  <div class="wrapper">
    <div class="main-content">

	
<div class="searchform">
	<h1>Search Page</h1><br>
	<form action="search1.php" method="POST">
		<input type="text" name="search" placeholder="Search"><br><br>
		<button type="submit" name="submit-search">Search</button>
	</form><br>
	
	<h2 class="text">All Exhibitions:</h2>
</div>
	
<div class="article-container">

<?php
	
	include('db/dbh.php');
	
		if($stmt = $conn->prepare("SELECT product_id, e_name, e_image, e_description, e_briefdescription, e_price, e_link FROM exhibitions")) {
			
			$stmt->bind_result($product_id, $e_name, $e_image, $e_description, $e_briefdescription, $e_price, $e_link);
			
			$stmt->execute();
			
			while ($stmt->fetch()){
			
				echo 
					
			    "<div class='article-box'>
				<a href=".$e_link.">".$e_name."</a>
				<p><img class='image1' src='images/".$e_image. "'></p>
				<div class='article-box2'>
				<p>Per Person: £".$e_price."</p>
				<p>Description: ".$e_briefdescription."</p>
				</div>
				</div>";
			}
			
			$stmt->close();
			
		}
		
		else{
			
			echo "No data returned";
		}
	
?>

</div>
	  
</div>
	
	<div class="main-sidebar2">	
		
	<h1>Facts</h1>
		
	<h3>Robot Exhibition</h3>
		<ui>
			<p>The Robot Exhibition is the newest addition to the National Museum of Scotland.</p>
			<p>The exhibition cost over £400,000 to install and bring in all the new interesting technology</p>
			<p>This exhibition was the most visited out of the exhibits by 23% in 2018.</p>
			<p>The robots are able to respond to human commands.</p>
		</ui>	
	<h3>Conscience Matters</h3>
		<ui>
			<p>During the Second World War, over 60,000 men and women chose not to fight for religious, political or moral reasons.</p>
			<p>Conscience Matters is our cheapest exhibit to visit throughout the museum</p>
			<p>World War 2 started on the 1st of September 1939 and finished on the 2nd of September 1945.</p>
			<p>Throughout World War 2 there are estimates of total deaths ranging from 70 million to 85 million.</p>
		</ui>	
	<h3>Parasites: Battle for Survival</h3>
		<ui>
			<p>Malaria, Guinea Worm, Sleeping Sickness, Schistosomiasis and Leishmaniasis are major diseases throughtout many contries.</p>
			<p>The World Health Organisation is aiming to eradicate Malaria, Guinea Worm, Sleeping Sickness, Schistosomiasis and Leishmaniasis, as soon as 2020.</p>
			<p>In 2017, an estimated 219 million cases of malaria occurred worldwide</p>
			<p>Guinea-worm disease is caused by the parasitic worm Dracunculus medinensis or "Guinea-worm". This worm is the largest of the tissue parasite affecting humans. </p>
		</ui>
	<h3>Embroided Stories: Scottish Samplers</h3>
		<ui>
			<p>Samplers are small pieces of needlework containing information about a person’s education,family, religion and interests.</p>
			<p>This collection of 70 samplers is a touching personal record of children’s lives.</p>
			<p>Scottish samplers are unique in that they often include the initials of extended family members and details of the place where the person lived. </p>
			<p>This exhibition offered a unique insight into the lives of children in the 18th and 19th centuries.</p>
		</ui>
    </div>



</div>
</div>

	
<?php
	include 'footer/footer.php';
?>
</body>
</html>