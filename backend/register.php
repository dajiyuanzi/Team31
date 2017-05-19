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
								$_SESSION['birthday']=$row['birthday'];
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

<title>Register - Super Karlskrona</title>
<link href="../assets/css/style.css" rel="stylesheet" type="text/css" />

<h1 class="title">Super Karlskrona</h1>

<div class="log">
	<div class="log1">
		<div class="innerbut">
			<a href="../frontend/index.php"><button>Go Back</button></a>
			<br>
			<br>
		</div>
		<div class="innerLog">
			Register
			<form action="../backend/register.php" method="post">
				<p>
					<label for="username" class="label">Username:</label>
					<br>
					<input id="username" name="username" type="text" class="input" />
				<p/>
              <p>
                <label for="birthday" class="label">Birthday</label>
					<br>
            
		 <select class="form-control" style="width: 30%;float: left;" name="year">
         
		    <option>Secret</option>
			<option>2016</option>
			<option>2015</option>
			<option>2014</option>
			<option>2013</option>
			<option>2012</option>
			<option>2011</option>
			<option>2010</option>
			<option>2009</option>
			<option>2008</option>
			<option>2007</option>
			<option>2006</option>
			<option>2005</option>
			<option>2004</option>
			<option>2003</option>
			<option>2002</option>
			<option>2001</option>
			<option>2000</option>
			<option>1999</option>
			<option>1998</option>
		    <option>1997</option>
			<option>1996</option>
			<option>1995</option>
			<option>1994</option>
			<option>1993</option>
			<option>1992</option>
			<option>1991</option>
			<option>1990</option>
			<option>1989</option>
			<option>1988</option>
		    <option>1987</option>
			<option>1986</option>
            <option>1985</option>
            <option>1984</option>
            <option>1983</option>
            <option>1982</option>
            <option>1981</option>
            <option>1980</option>
            <option>1979</option>
            <option>1978</option>
            <option>1977</option>
            <option>1976</option>
            <option>1975</option>
            <option>1974</option>
            <option>1973</option>
            <option>1972</option>
            <option>1971</option>
            <option>1970</option>
            <option>1969</option>
            <option>1968</option>

		</select>
        
		 <select class="form-control" name="month" style="width: 23%;margin-left:16px;float: left;">
		    <option>--</option>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
			<option>12</option>
			
		</select>
        
          <select class="form-control" name="day" style="width: 23%;margin-left:16px;float: left;">
          
            <option>--</option>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
			<option>12</option>
			<option>13</option>
			<option>14</option>
			<option>15</option>
			<option>16</option>
			<option>17</option>
			<option>18</option>
			<option>19</option>
			<option>20</option>
			<option>21</option>
			<option>22</option>
			<option>23</option>
			<option>24</option>
			<option>25</option>
			<option>26</option>
			<option>27</option>
			<option>28</option>
			<option>29</option>
			<option>30</option>
			<option>31</option>
            
		</select>
        
			<p/>
            
            <p>
					
					<br>
            <p/>

				<p>
					<label for="email" class="label">Email</label>
					<br>
					<input id="email" name="email" type="email" class="input" />
				<p/>
			  <p>
					<label for="password" class="label">Password</label>
					<br>
					<input id="password" name="password" type="password" class="input" />
				<p/>
              
				<p>
					<input type="submit" name="register" value="Register" class="left" />
					<br>
					<br>
					Already a member? <a href="../backend/login.php">Login</a>
			  </p>
			</form>
