<?php

if (isset($_POST['submit'])) {
	session_start();
	session_unset();
	session_destroy();
	echo "<script type='text/javascript'>window.top.location='../index.php';</script>";
	exit();
}

?>