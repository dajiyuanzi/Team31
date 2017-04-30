<?php
 include_once('../database/db_con.php');
 session_start();

 if (!isset($_SESSION['username'])){
 	header("Location:../frontend/index.php");
 }


?>