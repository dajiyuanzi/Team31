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

		<?php require_once('../backend/yourself.php'); ?>

		<br>
		<br>
		
	
	</div>
</body>