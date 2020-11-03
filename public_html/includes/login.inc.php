<?php

session_start();

error_reporting(E_ALL | E_WARNING | E_NOTICE);
ini_set('display_errors', TRUE);

if (isset($_POST['submit'])) {
	
	include '../db/dbh.php';
	
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	
	//Error handlers
	//Check if inputs are empty
	if (empty($uid) || empty($pwd)) {
            echo "<script type='text/javascript'>window.top.location='../admin.php?login=empty';</script>";
		exit();
	} else {
		$sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email='$uid'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
            echo "<script type='text/javascript'>window.top.location='../admin.php?login=error';</script>";
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				//De-hashing the password
				$hashedPwdCheck = password_verify($pwd, $row['user_pwd']); 
				if ($hashedPwdCheck == false) {
                    echo "<script type='text/javascript'>window.top.location='../admin.php?login=error';</script>";
					exit();
				} elseif ($hashedPwdCheck == true) {
					//Log in the user here
					$_SESSION['u_id'] =$row['user_id'];
					$_SESSION['u_first'] =$row['user_first'];
					$_SESSION['u_last'] =$row['user_last'];
					$_SESSION['u_email'] =$row['user_email'];
					$_SESSION['u_uid'] =$row['user_uid'];
					echo "<script type='text/javascript'>window.top.location='../adminsuccess.php?login=success';</script>";
					exit();
				}
			}
		}
		
	}
	
} else {
    echo "<script type='text/javascript'>window.top.location='../admin.php?login=error';</script>";
    exit();
}

?>