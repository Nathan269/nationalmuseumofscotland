<?php
	
$name = $_REQUEST['name'];
$comments = $_REQUEST['comments'];


require('db/db.php');

mysqli_query($con, "INSERT INTO consciencecomments(name, comments) VALUES('$name','$comments')");

$result = mysqli_query($con, "SELECT * FROM consciencecomments ORDER BY id ASC");
while($row=mysqli_fetch_array($result)){
echo "<div class='comments_content'>";
echo "<h4><a href='consciencedelete.php?id=" . $row['id'] . "'> X</a></h4>";
echo "<h1>" . $row['name'] . "</h1>";
echo "<h2>" . $row['date_publish'] . "</h2></br></br>";
echo "<h3>" . $row['comments'] . "</h3>";
echo "</div>";
}
mysqli_close($con);
?>