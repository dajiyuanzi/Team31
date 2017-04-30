<?php
require_once('../database/db_con.php');

if(isset($_POST['tid'])){
	$sql="select `like` from topic where tid='".$_POST['tid']."';";
	$result=$con->query($sql) or die('MySQL Error: ' . mysqli_error());
	$row=$result->fetch_assoc();

	$row['like']++;
	$sql="update topic set `like`='".$row['like']."' where tid='".$_POST['tid']."';";
	$result=$con->query($sql) or die('MySQL Error: ' . mysqli_error());

	echo $row['like'];
}
else{
	die('MySQL Error: ' . mysqli_error());
}

?>