<?php
require_once('../database/db_con.php');

if(isset($_POST['username'])&&isset($_POST['password'])){
	$sql="select * from user where name='".$_POST['username']."' and code=".$_POST['password'].";";
	$result=mysql_query($sql) or die('MySQL Error: ' . mysqli_error());
	$row=mysql_fetch_array($result);
	echo $row;
	if (!$row) {
		echo "<script>alert('Wrong username or password');</script>";
	}
	else{
		if(!isset($_SESSION)){
		session_start();
        $_SESSION['username']=$row['name'];
        $_SESSION['email']=$row['email'];
        $_SESSION['uid']=$row['uid'];
        header("Location:../frontend/index.php");
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
		<input type="submit" name="submit" value="Confirm" class="left" />
	</p>
</form>
