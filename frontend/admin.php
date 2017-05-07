<link href="../assets/css/style.css" rel="stylesheet" type="text/css" />

<body class="bg1">
	<div class="container-fluid">

		<h1 class="title">Super Karlskrona</h1>

	<?php
		require_once('../public/head.php');
		require_once('../public/nav.php');
	?>

	<div class="row-fluid">
		<div class="span12">
			<ul class="nav nav-tabs navbg">
				<!--<li class="active">
					<a href="login.php">Home</a>
				</li>
				<li>
					<a href="index.php">Index</a>
				</li>-->
				<?php


				  $page = "";

				  if (isset($_GET['page']))
				  {
				    if ($_GET['page'] != "")
				    {
				      $page = $_GET['page'];
				    }
				  }

					$pageTopic = "disabled";
					$pageNews = "disabled";

					if ($page == "news") {
							$pageNews = "active";
					}
					else {
						$pageTopic = "active";
					}

					echo
					'<li class="'.$pageTopic.'">
						<a href="../frontend/admin.php">Topic Management</a>
					</li>
					<li class="'.$pageNews.'">
						<a href="../frontend/admin.php?page=news">News Management</a>
					</li>
					';



				?>
			</ul>
		</div>
	</div>


	<div class="row-fluid">
	<!--<form action="index.php"><input type="submit" value="Go back" /></form>-->
	<button><a href="../frontend/index.php">Go Back</a></button>
	<br/><br/>
		<table>
			<tr><td>tid</td><td>name</td><td>like</td><td>dislike</td><td>color</td><td>description</td><td>code</td><td>uid</td></tr>
			<?php require_once('../backend/admin.php'); ?>
		</table>

		<br>
		
		<legend>Delete Comment</legend>
		<form method="post" action="../frontend/admin.php">
			<p>
				<label for="username" class="label">ID of Topic to Delete:</label>
				<input id="username" name="tid" type="text" class="input" />
			<p/>
				<input type="submit" name="profile" value="Delete" class="left" />
			</p>
		</form>
	</div>
	</div>
</body>