

<?php
include 'db/dbh.php';
session_start();
?>
<header>
<nav class="nav-wrapper">
  <div class="logo"> 
      <i class="fas fa-atom"></i> <strong>National Museum of Scotland</strong> 
  </div>
  <div class="burger-icon"><i class="fas fa-bars"></i> MENU</div>
  <ul class="nav-items main-nav mobile-hide">
    <li class="list-item"><a href="index.php">Home</a></li>
    <li class="list-item"><a href="exhibitionsearch.php">Search</a></li>
    <li class="list-item"><a href="bookingpage.php">Booking</a></li>
    <li class="list-item"><a href="admin.php">Admin</a></li>
    <li class="list-item"><a href="signup.php">Register</a></li>
    <li class="list-item"><a href="contactpage.php">Contact</a></li> 
	
		<div class="list-item2" id="logout">
		<?php
	
					if (isset($_SESSION['u_id'])) {
						echo 
							
						'<form action="includes/logout.inc.php" method="POST"> 
						<button type="submit" name="submit">Logout</button>
						</form>';
					} 
		
	  ?>
	  <?php
				if (isset($_SESSION['u_id'])) {
				    
					echo "You are logged in!";
				}
		?></div>
  </ul>
	
	
</nav>
</header>
