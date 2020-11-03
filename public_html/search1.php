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

<?php

include 'header/header.php';
?>		

<div class="main-wrapper">
	
  <div class="wrapper">
    
    <div class="main-content">
				
<h1>Search Page</h1><br><br>
<div class="searchform2">
<form action="search1.php" method="POST">
	<input type="text" name="search" placeholder="Search">
	<button type="submit" name="submit-search">Search</button>
</form>
<h2>All Products:</h2>
</div>	
<div class="article-container">
	
<?php
		
	if (isset($_POST['submit-search'])) {
			$search = mysqli_real_escape_string($conn, $_POST['search']);
			$sql = "SELECT * FROM exhibitions WHERE e_name LIKE '%$search%' OR e_briefdescription LIKE '%$search%'";
			$result = mysqli_query($conn, $sql);
			$queryResult = mysqli_num_rows($result);
			
			echo "There are ".$queryResult." results!"; 
			
			if ($queryResult > 0) {
				while ($row = mysqli_fetch_assoc($result)){
					echo 
						
						'<div class="article-box">
						 <h3><a href="'.$row["e_link"].'">'.$row["e_name"].'</a></h3>					 
						 <p> Price: £'.$row["e_price"].'</p>
						 <p> Exhibition Description: '.$row["e_briefdescription"].'</p>
						 </div>';
				}
			} else {
				echo "There are no results matching your search!";
			}
		}
	
?>


</div>			
</div>
	  <div class="main-sidebar">
		
		<iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&layout=button&size=large&width=73&height=28&appId" width="73" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
		
		<a class="twitter-share-button"
  href="https://twitter.com/intent/tweet?text=My%20thoughts%20on%20the%20Robots%20Exhibition%20are..."
  data-size="large">
Tweet</a>
			
      <a class="twitter-timeline" href="https://twitter.com/Techmanrobot?ref_src=twsrc%5Etfw">Tweets by Techmanrobot</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
</div>
</div>

	
<?php

include 'footer/footer.php';
?>
</body>
</html>