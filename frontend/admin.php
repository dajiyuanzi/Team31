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
		<table>
			<tr><td>tid</td><td>name</td><td>like</td><td>dislike</td><td>color</td><td>description</td><td>code</td><td>uid</td></tr>
			<?php require_once('../backend/admin.php'); ?>
		</table>

		<br>
		<br>
		<legend>Launch Comment</legend>
		<form method="post" action="../frontend/admin.php">
			<p>
				<label for="username" class="label">ID of Topic to Delete:</label>
				<input id="username" name="tid" type="text" class="input" />
			<p/>
				<input type="submit" name="profile" value="Delete" class="left" />
			</p>
		</form>
	
	</div>
</body>