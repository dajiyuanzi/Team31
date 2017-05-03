<link href="../assets/css/style.css" rel="stylesheet" type="text/css" />

<body class="bg1">
<div class="container-fluid">

	<h1 class="title">Super Karlskrona</h1>

<?php
	require_once('../public/head.php');
	require_once('../public/nav.php');
?>
<div class="row-fluid">
<form action="index.php"><input type="submit" value="Go back" /></form>


	<?php require_once('../backend/comment.php'); ?>

	<legend>Launch Comment</legend>
	<form action="../frontend/comment.php?tid=<?php echo $tid; ?>" method="post">
		<p>
			<label for="comment" class="label">Your Comment</label>
			<input id="comment" name="comment" type="input" class="input" />
		<p/>
		<p>
			<input type="submit" name="login" value="Launch Comment" class="left" />
		</p>
	</form>
</div>
</div>
</body>
</body>
