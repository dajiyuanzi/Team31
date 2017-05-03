<html>
	<link href="../assets/css/style.css" rel="stylesheet" type="text/css" />
	<?php require_once('../public/head.php'); ?>

	<script type="text/javascript" src="../public/likedislike_ajax.js"></script>
	<body class="bg1">
	<div class="container-fluid">

		<h1 class="title">Super Karlskrona</h1>
		<?php require_once('../public/nav.php'); ?>
		<div class="row-fluid">
			<!--<div class="span2" style="background:yellow;">

			</div>
			<div class="span8">-->
				<?php require_once('../backend/addtopic.php'); ?>
				<?php require_once('../backend/topics.php'); ?>
			<!--</div>
			<div class="span2" style="background:green;">

			</div>-->
		</div>
	</div>
	</body>
	<br>
	<br>
	<br>
	<br>
</html>
