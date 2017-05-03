<?php
 include_once('../database/db_con.php');
 session_start();

 if (!isset($_SESSION['username'])){
 	echo "<script>alert('Please Login! fitstly');</script>";
 	header("refresh:2; url=../frontend/index.php");
 }


?>