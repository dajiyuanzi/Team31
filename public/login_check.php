<?php
 include_once('../database/db_con.php');
 session_start();

 if (!isset($_SESSION['username'])){
 	echo "<script>alert('Please Login! fitstly');</script>";
 	header("refresh:3; url=../frontend/index.php");
 }


?>