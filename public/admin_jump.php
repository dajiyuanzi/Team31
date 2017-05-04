<?php
session_start();

if($_SESSION['username']=="admin"){
	echo "<li><a href='../frontend/admin.php'>Admin</a></li>";
}

?>