<?php 
$db_host    = 'localhost';
$db_username= 'root';
$db_password= '';
$db= 'superkarlskrona';

$con = mysql_connect($db_host,$db_username,$db_password) or die ("Cannot connect db: " . mysql_error());
mysql_select_db($db,$con) or die ("Cannot connect db: " . mysql_error());


mysql_query("set names utf8");
date_default_timezone_set("Europe/Stockholm");

?>