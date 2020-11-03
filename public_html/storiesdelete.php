<?php
require('db/db.php');

if(isset($_GET['id'])){
	$id = $_GET['id'];
mysqli_query($con,"DELETE FROM storiescomments WHERE id='$id'");
header('location: storiesexhibition.php');
}
mysqli_close($con);
?>