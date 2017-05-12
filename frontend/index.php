<html>
	<link href="../assets/css/style.css" rel="stylesheet" type="text/css" />
	<?php require_once('../public/head.php'); ?>

	<script type="text/javascript" src="../public/likedislike_ajax.js"></script>
	<body class="bg1">
	<div class="container-fluid">

		<h1 class="title">Super Karlskrona</h1>
		<?php require_once('../public/nav.php'); ?>
		<div class="row-fluid">
				<div class="addtopicbutton">
					<a href="../backend/login.php" id="login" >Login</a> / <a href="../backend/register.php">Register</a> to be able to add topics
					<br><br>
				</div>

				<?php require_once('../backend/topicsVisitor.php'); ?>
		</div>
	</div>
 <?php include_once 'qtdown.php';?>

	</body>
	<br>
	<br>
	<br>
	<br>
</html>
