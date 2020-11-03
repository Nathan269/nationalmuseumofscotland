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
    <div class="featured">
      <div id="meta"></div>
      	<h1><a href="robotexhibition.php" style="color: white;" >Robot Exhibition!</a></h1>
      	<span id="hero-date" style="color: white;">From early mechanised human forms to today’s cutting-edge technology, this major exhibition reveals our 500-year quest to make machines human.</span> 
    </div>
	  
    <div class="sub-featured">
      <div class="sub1">
        <h3><a href="parasitesexhibition.php"  style="color: white;" >Parasites: Battle for Survival</a></h3>
      </div>
      <div class="sub2">
        <h3><a href="conscienceexhibition.php"  style="color: white;" >Conscience Matters</a></h3>
      </div>
      <div class="sub3">
        <h3><a href="storiesexhibition.php"  style="color: white;" >Embroidered Stories: Scottish Samplers</a></h3>
      </div>
    </div>
    <div class="main-content">
		<h3>Our mission</h3>
			<p>We preserve, interpret and make accessible for all, the past and present of Scotland, other nations and cultures, and the natural world.</p>
	    <h3>Our vision</h3>
			<p>Inspiring people, connecting Scotland to the world and the world to Scotland.</p>
		<h3>Our aims</h3>
			<p>These aims direct our priorities, activities and actions:</p>
		<ui>
			<li>Put People First</li>
			<li>Create inspiring experiences that help our audiences’ understanding of themselves and the world around them.</li>
			<li>Value our Collections</li>
			<li>Preserve, interpret, share and make them accessible for all.</li>
			<li>Increase our Reputation and Reach</li>
			<li>Connect more with people locally, nationally and internationally.</li>
			<li>Transform our Organisation</li>
			<li>Develop our people, and work together to deliver our ambitions and increase our income.</li>
		</ui>
		<h3>Our priorities</h3>
			<ui>
				<li>Creating inspiring visitor experiences at our Museums and elsewhere.</li>
				<li>Developing, preserving and increasing access to the National Collections.</li>
				<li>Strengthening and sharing collections knowledge and research.</li>
				<li>Reaching out to people across Scotland and the world.</li>
				<li>Transforming our digital engagement.</li>
				<li>Valuing, supporting and developing our people and empowering them to work together in new ways.</li>
				<li>Growing and diversifying our income.</li>
			</ui>
		<h3>Our values</h3>
			<p>
				Creative: we are innovative and thrive on good ideas<br>
				Generous: we are open, friendly and enabling<br>
				Collaborative: we are enquiring, receptive and well connected<br>
				Forward thinking: we look for the big picture as well as the detail.
			</p>
    </div>
    <div class="main-sidebar">
		
		<iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Ffacebook.com%2Fpages%2FNational-Museum-of-Scotland%2Fdocs%2Fplugins%2F&layout=button&size=large&width=73&height=28&appId" width="73" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
		
		<a class="twitter-share-button"
  href="https://twitter.com/intent/tweet?text=My%20thoughts%20on%20The%20National%20Museum%20of%20Scotland%20are..."
  data-size="large">
Tweet</a>
		
      <a class="twitter-timeline" href="https://twitter.com/NtlMuseumsScot?ref_src=twsrc%5Etfw">Tweets by NtlMuseumsScot</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
  </div>
</div>
	
<?php
	include 'footer/footer.php';
?>
</body>
</html>