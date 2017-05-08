<?php
include_once('../database/db_con.php');
require_once('../public/login_check.php');

$sql="select `rid`, `address`, `description`, `contact` from room;";
$result=$con->query($sql);

//Display all available sharing
if ($result->num_rows > 0) {
	echo "<table>";
	while($row = $result->fetch_assoc()){
		echo "<tr><td>".$row['rid']."</td><td>".$row['address']."</td><td>".$row['description']."</td><td>".$row['contact']."</td></tr>";
	}
	echo "</table>";
}
else{
	echo "<p>No Room Sharing</p>";
}

?>




