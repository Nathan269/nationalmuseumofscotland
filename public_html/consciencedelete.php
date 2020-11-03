<?php
require('db/db.php');

if(isset($_GET['id'])){
	$id = $_GET['id'];
mysqli_query($con,"DELETE FROM consciencecomments WHERE id='$id'");
header('location: conscienceexhibition.php');
}
mysqli_close($con);
?>