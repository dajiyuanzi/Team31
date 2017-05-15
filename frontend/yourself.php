<link href="../assets/css/style.css" rel="stylesheet" type="text/css" />

<body class="bg1">
	<div class="container-fluid">

		<h1 class="title">Super Karlskrona</h1>

	<?php
		require_once('../public/head.php');
		require_once('../public/navLogedin.php');
	?>
	<div class="row-fluid">
	<!--<form action="indexLogedin.php"><input type="submit" value="Go back" /></form>-->
	<a href="../frontend/indexLogedin.php"><button>Go Back</button></a>
	<br/><br/>

		<?php require_once('../backend/yourself.php'); ?>

		<br>
		<br>


	</div>
</body>
