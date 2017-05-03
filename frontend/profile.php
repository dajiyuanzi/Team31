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

		<?php require_once('../backend/profile.php'); ?>

		<br>
		<br>
		<legend>Launch Comment</legend>
		<form method="post" action="../frontend/profile.php">
			<p>
				<label for="username" class="label">New User Name:</label>
				<input id="username" name="username" type="text" class="input" />
			<p/>
			<p>
				<label for="email" class="label">New Email</label>
				<input id="email" name="email" type="email" class="input" />
			<p/>
			<p>
				<label for="password" class="label">New Password</label>
				<input id="password" name="password" type="password" class="input" />
			<p/>
			<p>
				<input type="submit" name="profile" value="Alter" class="left" />
			</p>
		</form>
	
	</div>
</body>