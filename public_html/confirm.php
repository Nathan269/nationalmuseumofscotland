<?php
	include_once 'header.php';
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>National Museum of Scotland</title>
</head>

<body>
</body>


	<link rel="stylesheet" type="text/css" href="searchfeature/style.css">

	<section class="main-container"> 
		<div class="main-wrapper">
			
			<h2>Added Product!</h2>
			
			<h2>You have successfully added a new product, have a look at the search page!</h2>
</html>
				
</div>
			
<?php
	if (isset($_SESSION['u_id'])) {
	echo "You are logged in!";
	}
?>
</div>
</section>
<?php
	include_once 'footer.php';
?>
