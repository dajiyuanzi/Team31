<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "superkarlskrona";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//mysql_query("set names utf8");
date_default_timezone_set("Europe/Stockholm");
?>
