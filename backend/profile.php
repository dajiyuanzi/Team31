<?php
	require_once('../database/db_con.php');
	require_once('../public/login_check.php');

	$uid=$_SESSION['uid'];
	$result= $con->query("select * from user where uid=".$uid.";");

	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	    	echo "<p>Your Current Name:".$row['name']."</p><br>";
	    	echo "<p>Your Current Email: ".$row['email']."</p><br>";
	    }
	}

	if(!empty($_POST['username'])){
		$result = $con->query("SELECT name FROM user WHERE name='".$_POST['username']."';");
		$row = $result->fetch_assoc();
	    if ($row['name'] == $_POST['username']){
	        echo "<script>alert('This user name has been used!');</script>";
	    }
		else{
			@$con->query("update user set name='".$_POST['username']."' where uid='".$uid."';") or die('MySQL Error: ' . mysqli_error());
		}
	}

	if(!empty($_POST['email'])){
		@$con->query("update user set email='".$_POST['email']."' where uid='".$uid."';") or die('MySQL Error: ' . mysqli_error());
	}

	if(!empty($_POST['password'])){
		@$con->query("update user set code='".$_POST['password']."' where uid='".$uid."';") or die('MySQL Error: ' . mysqli_error());
	}

	if(empty($_POST['username'])&&empty($_POST['email'])&&empty($_POST['password'])){
		echo "<script>alert('Please enter something!');</script>";
	}

?>