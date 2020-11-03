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
    
    <div class="main-content">
		
			<h2>Contact Page</h2>
			
			<p>Fill out the following form with any enquiries you may have about the website or for more general questions about booking.</p>
		
		<form action="" method="post">
		First Name: <input type="text" name="first_name" required><br><br>
		Last Name: <input type="text" name="last_name" required><br><br>
		Email: <input type="email" name="email" required><br><br>
		Message:<br><textarea rows="5" name="message" cols="30" required></textarea><br><br>
		<input type="submit" name="submit" value="Submit">
		</form>
		
		<br>
		
		<?php 
if(isset($_POST['submit'])){
    $to = "nationalmuseumofscotland@enquiries.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Enquiry Acknowledgement";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "$first_name, this is an acknowledgement that we have successfully received the following enquiry: \n\n" . $_POST['message'];
	$message3 = "We will respond to your enquiry within the next 2-3 working days.";
    $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2, $message3); // sends a copy of the message to the sender
	echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
  </div>
	  	  <div class="main-sidebar3">
		
			<h2>Contact Information</h2>
			  
		<p>If you complete the form and it is successfully submitted, we will send you a confirmation email to let you know we have received your enquiry.</p>
			  
		<h3>Our Email:</h3> <p>nationalmuseumofscotland@enquiries.com</p>
			  
		<h3>Our Address:</h3> <p>Chambers St, Edinburgh, Scotland, EH1 1JF</p>
		
		<h3>Our Telephone:</h3> <p>0131-526374</p>
    </div>
</div>
	</div>
	
<?php
	include 'footer/footer.php';
?>
</body>
</html>