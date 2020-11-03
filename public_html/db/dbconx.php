<?php
//Include your own values for username, password and dbase name

$host = "localhost";
$username = "id9667645_root";
$password = "AARON511";
$dbname = "id9667645_dbphpesearch";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "<br><br> Connected successfully  <br>";
?>