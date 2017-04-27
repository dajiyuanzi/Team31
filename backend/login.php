<?php
require_once('../database/db_con.php');

$sql="select * from user where username='$_POST[username]'";
$result=mysql_query($sql) or die('MySQL Error: ' . mysqli_error());
$row=mysql_fetch_array($result) or die('MySQL Error: ' . mysqli_error());

if($row['password'] != $_POST['password'])
	echo('Wrong password');
else 
{
	if(!isset($_SESSION)){
		session_start();
        $_SESSION["username"]=$row['name'];
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
