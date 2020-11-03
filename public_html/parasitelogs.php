<table id="customers">
	<tr id="customers2">
		<th>Name</th>
		<th>Date of Publish</th>
		<th>Comment</th>
		<th>Delete</th>
	</tr>
<?php

require('db/db.php');
$result = mysqli_query($con, "SELECT * FROM parasitecomments ORDER BY id ASC");
while($row=mysqli_fetch_array($result)){
echo "<div class='comments_content'>";
echo "<tr><th>" . $row['name'] . "</th>";
echo "<th>" . $row['date_publish'] . "</th>";
echo "<th>" . $row['comments'] . "</th>";
echo "<th><a href='parasitedelete.php?id=" . $row['id'] . "'> X</a></th></tr>";
echo "</div>";
}
mysqli_close($con);

?>
</table>