<?php
require_once('../database/db_con.php');

if(isset($_POST['tid'])){
	$sql="select `dislike` from topic where tid='".$_POST['tid']."';";
	$result=$con->query($sql) or die('MySQL Error: ' . mysqli_error());
	$row=$result->fetch_assoc();

	$row['dislike']++;
	$sql="update topic set `dislike`='".$row['dislike']."' where tid='".$_POST['tid']."';";
	$result=$con->query($sql) or die('MySQL Error: ' . mysqli_error());

	echo $row['dislike'];
}
else{
	die('MySQL Error: ' . mysqli_error());
}

?>