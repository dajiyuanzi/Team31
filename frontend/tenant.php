<link href="../assets/css/style.css" rel="stylesheet" type="text/css" />

<body class="bg1">
	<div class="container-fluid">

		<h1 class="title">Super Karlskrona</h1>

		<?php
			require_once('../public/head.php');
			require_once('../public/nav.php');
			require_once('../public/login_check.php');
		?>
		<button><a href="../frontend/index.php">Go Back</a></button>
		<div class="row-fluid">	
			<div class="span6">>
				<legend>Launch A New Room Sharing</legend>
				<form action="../frontend/tenant.php" method="post">
					<p>
						<label for="comment" class="label">Address</label>
						<input type="text" name="login" value="Launch Comment" class="left" />
					<p/>
					<p>
						<input type="submit" name="login" value="Launch Comment" class="left" />
					</p>
				</form>
			</div>
			<div class="span6">>
				<legend>Apply A Room Sharing</legend>
				<form action="../frontend/tenant.php?act=apply" method="post">
					<p>
						<label for="comment" class="label">Address</label>
						<input type="text" name="login" value="Launch Comment" class="left" />
					<p/>
					<p>
						<input type="submit" name="login" value="Launch Comment" class="left" />
					</p>
				</form>
			</div>	
		</div>

		<div class="row-fluid">
			<div class="span8">
				<legend>Available Sharing</legend>
				<?php require_once('../backend/tenant.php'); ?>
			</div>

			<div class="span4">
				<legend>Applications to Your Sharing</legend>
				<?php  ?>
			</div>
		</div>
		
	</div>
</body>
