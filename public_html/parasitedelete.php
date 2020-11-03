<?php
require('db/db.php');

if(isset($_GET['id'])){
	$id = $_GET['id'];
mysqli_query($con,"DELETE FROM parasitecomments WHERE id='$id'");
header('location: parasitesexhibition.php');
}
mysqli_close($con);
?>