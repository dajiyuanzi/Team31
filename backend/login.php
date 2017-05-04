<?php
require_once('../database/db_con.php');

if(isset($_POST['username'])&&isset($_POST['password'])){
	$sql="select * from user where name='".$_POST['username']."' and code=".$_POST['password'].";";
	$result=$con->query($sql) or die('MySQL Error: ' . mysqli_error());
	$row=$result->fetch_assoc();

	if (!$row) {
		echo "<script>alert('Wrong username or password');</script>";
	}
	else{
		if(!isset($_SESSION)){
			session_start();
	        $_SESSION['username']=$row['name'];
	        $_SESSION['email']=$row['email'];
	        $_SESSION['uid']=$row['uid'];
	        $_SESSION['password']=$row['code'];
	        if($_SESSION['username']=="admin"){
	        	header("Location:../frontend/admin.php");
	        }
	        else{
	        	header("Location:../frontend/index.php");
	        }
		}	
	}
}

?>

<legend>Login</legend>
<form action="../backend/login.php" method="post">
	<p>
		<label for="username" class="label">User Name:</label>
		<input id="username" name="username" type="text" class="input" />
	<p/>
	<p>
		<label for="password" class="label">Password</label>
		<input id="password" name="password" type="password" class="input" />
	<p/>
	<p>
		<input type="submit" name="login" value="login" class="left" />
	</p>
</form>
