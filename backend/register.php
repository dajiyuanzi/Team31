<?php
require_once('../database/db_con.php');

$username = "";
$email = "";
$password = "";

if(isset($_POST['username'])&&isset($_POST['email'])&&isset($_POST['password'])){
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
}


if($username != "")
{
    $result = $con->query("SELECT * FROM user WHERE name='".$username."';");
    if ($result && $result->num_rows > 0)
    {
        echo "<script>alert('This username has bee used! Try another!');</script>";
    }
    else
    {
        $sql = "INSERT INTO user(name, email, code) VALUES ('".$username."', '".$email."', '".$password."');";
        if (!$con->query($sql)) {
            echo 'Mysql error: ' . mysql_error();
            exit;
        } else {
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
						        	header("Location:../frontend/indexLogedin.php");
						        }
							}
						}
					}
        }
        header("Location:../frontend/indexLogedin.php");
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
		<input type="submit" name="register" value="Register" class="left" />
	</p>
</form>
