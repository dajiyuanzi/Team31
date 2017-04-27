<?php
require_once('../database/db_con.php');

if(isset($_POST['username'])&&isset($_POST['email'])&&isset($_POST['password'])){
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
}

if(!empty($username))
{
    $conn = mysql_query("SELECT * FROM user WHERE username='$username'");
    if ($conn && mysql_num_rows($conn) > 0) 
    {
        echo "<script type="text/javascript">alert("This username has been used! Try another.");</script>";
    }
    else 
    {
        $sql = "INSERT INTO user(name, email, code) VALUES ('$name', '$email', '$password');";
        if (!mysql_query($sql)) 
        {
            echo 'Mysql error: ' . mysql_error();
            exit;
        }
        header("Location:../frontend/index.php");
    }
}

?>

<form action="../backend/register.php" method="post">
	<p>
		<label for="username" class="label">User Name:</label>
		<input id="username" name="username" type="text" class="input" />
	<p/>
	<p>
		<label for="email" class="label">Email</label>
		<input id="email" name="email" type="email" class="input" />
	<p/>
	<p>
		<label for="password" class="label">Password</label>
		<input id="password" name="password" type="password" class="input" />
	<p/>
	<p>
		<input type="submit" name="register" value="register" class="left" />
	</p>
</form>