<link href="../assets/css/style.css" rel="stylesheet" type="text/css" />

<body class="bg1">
	<div class="container-fluid">

		<h1 class="title">Super Karlskrona</h1>

	<?php
		require_once('../public/head.php');
		require_once('../public/nav.php');
	?>
	<div class="row-fluid">
	<!--<form action="index.php"><input type="submit" value="Go back" /></form>-->
    	<button><a href="../frontend/index.php">Go Back</a></button>
	<br/><br/>
    
    <script type="text/javascript" >
function validate(){
 var username = document.getElementsByName("username")[0];
 var password = document.getElementsByName("password")[0];
 var password2 = document.getElementsByName("password2")[0];
 var email = document.getElementsByName("email")[0];
 var phonenumber = document.getElementsByName("phonenumber")[0];

 if(username.value.length < 1){
     alert("Enter your new name please!");
     return false;
    
 } else if(username.value.length > 10){
 
 	alert("The new name should be less than 10!");
     return false;
 }
 
   if(password.value.length < 1){
    
     alert("Enter your new password please!");
     return false;
    
  } else if(password.value.length > 20){
 
 	alert("The password should be less than 20!");
     return false;
 }
    if(password2.value.length < 1){
    
     alert("Enter your new password again please!");
     return false;
     
    
  } else if(password2.value.length > 20){
 
 	alert("The password should be less than 20!");
     return false;
 } 

 if(password.value!=password2.value){
 	alert("The password input should be same!");
    return false;
 }
 
  if(email.value.length < 1){
    
     alert("Enter your new email please!");
     return false;
    
 } else if(email.value.length > 20){
 
 	input.password="";
 	alert("The email should be less than 20!");
    return false;
 }
 
   /*if(phonenumber.value.length < 1){
    
     alert("Enter your new phonenumber please!");
     return false;
    
 } else if(phonenumber.value.length > 15){
 
 	alert("The telephone number should be less than 15!");
     return false;
 }
   
    return true;
 }*/
 
</script>


		<?php require_once('../backend/profile.php'); ?>

		<br>
		<br>
		<legend>Alter Profile</legend>
		<form method="post" action="../frontend/profile.php">
			<p>
				<label for="username" class="label">New User Name:</label>
				<input id="username" name="username" type="text" class="input" />
			<p/>
			<p>
				<label for="password" class="label">New Password</label>
				<input id="password" name="password" type="password" class="input" />
			<p/>
            <p>
				<label for="confirm password" class="label">Confirm Password</label>
				<input id="confirm password" name="password2" type="password" class="input" />
			<p/>
            <p>
				<label for="email" class="label">New Email</label>
				<input id="email" name="email" type="email" class="input" />
		  	<p/>
            <!--<p>
				<label for="phonenumber" class="label">New Phone number</label>
				<input id="phonenumber" name="phonenumber" type="phonenumber" class="input" />
			<p/>-->
			<p>
				<input type="submit" name="profile" value="Alter" class="left" />
			</p>
		</form>
	
	</div>
</body>