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
<script src="javascript/parasitecomments.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	
<?php
	include 'header/header.php';
?>
	
<div class="main-wrapper">
  <div class="wrapper">
    
    <div class="main-content">
		
<?php
		
	include('db/dbh.php');
	
		if($stmt = $conn->prepare("SELECT product_id, e_name, e_image, e_description, e_price, e_link FROM exhibitions WHERE e_name LIKE 'P%'")) {
			
			$stmt->bind_result($product_id, $e_name, $e_image, $e_description, $e_price, $e_link);
			
			$stmt->execute();
			
			while ($stmt->fetch()){
			
				echo 
					
			    "<div class='article-box'>
				<h1 href=".$e_link.">".$e_name."</h1>
				<div class='slideshow-container'>
				<div class='mySlides fade'>
  				<div class='numbertext'>1 / 3</div>
  				<img src='images/parasites-michael-schiffer.jpg' style='width:100%'>
				</div>
				<div class='mySlides fade'>
				<div class='numbertext'>2 / 3</div>
				<img src='images/parasites-lucas-vasques.jpg' style='width:100%'>
				</div>
				<div class='mySlides fade'>
  				<div class='numbertext'>3 / 3</div>
  				<img src='images/parasites-ousa-chea.jpg' style='width:100%'>
				</div>
				</div>
				<div style='text-align:center'>
  				<span class='dot'></span> 
				<span class='dot'></span> 
  				<span class='dot'></span> 
				</div>
				<h2>Star Rating</h2>
				<span class='fa fa-star checked'></span>
				<span class='fa fa-star checked'></span>
				<span class='fa fa-star checked'></span>
				<span class='fa fa-star checked'></span>
				<span class='fa fa-star'></span>
				<h3>Price (per person): £".$e_price."</h3>
				<h3>About the exhibition: <br> <h4> ".$e_description."</h4></h3>
				</div>";
			}
			
			$stmt->close();
			
		}
		
		else{
			
			echo "No data returned";
		}
	
?>
		<div id="container">
	<h2>
		<div class="page_content">
    		Comment Section
    	</div>
	</h2>
    <div class="comment_input">
        <form name="form1">
        	<input type="text" name="name" placeholder="Name..."/></br></br>
            <textarea rows="5" cols="50" name="comments" placeholder="Leave Comments Here..." style="width:90%; height:20%;"></textarea></br></br>
            <a href="#" onClick="commentSubmit()" class="button">Post</a></br>
        </form>
    </div>
    <div id="comment_logs">
    	Loading comments...
</div>

	</div>
</div>
	<div class="main-sidebar">
		
		<iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Ffacebook.com/malarianomore/%2Fdocs%2Fplugins%2F&layout=button&size=large&width=73&height=28&appId" width="73" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
		
		
		<a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=Donate%20to%20(Choice%20of%20charity)%20to%20raise%20money%20for%20more%20research!"
  		data-size="large">Tweet</a>
		
		<a class="twitter-timeline" href="https://twitter.com/MalariaNoMore?ref_src=twsrc%5Etfw">Tweets by MalariaNoMore</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
		
		
			
      <a class="twitter-timeline" href="https://twitter.com/Techmanrobot?ref_src=twsrc%5Etfw">Tweets by Techmanrobot</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
	  
	</div>		
</div>
<?php
	include 'footer/footer.php';
?>
	

<script src="javascript/slideshow.js"></script>
</body>
</html>