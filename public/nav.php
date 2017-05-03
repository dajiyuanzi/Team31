<link href="../assets/css/style.css" rel="stylesheet" type="text/css" />

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

				$pagePopular = "disabled";
				$pageComment = "disabled";
				$pageIndex = "disabled";

				if ($page == "popular") {
						$pagePopular = "active";
				} elseif ($page == "comment") {
					$pageComment = "active";
				} else {
					$pageIndex = "active";
				}

				echo
				'<li class="'.$pageIndex.'">
					<a href="index.php">All</a>
				</li>
				<li class="'.$pagePopular.'">
					<a href="index.php?page=popular">Most popular</a>
				</li>
				<li class="'.$pageComment.'">
					<a href="index.php?page=comment">Most commented</a>
				</li>';



			?>

			<li class="dropdown pull-right">
				<a href="#" data-toggle="dropdown" class="dropdown-toggle">Drop<strong class="caret"></strong></a>
				<ul class="dropdown-menu">
					<li>
						<a href="../frontend/logmode.html">Main frame</a>
					</li>
					<li class="divider">
					</li>
					<li>
						<a href="../backend/register.php">Register</a>
					</li>
					<li>
						<a href="../backend/login.php">Login</a>
					</li>
					<li>
						<a href="../frontend/own.php">Yourself</a>
					</li>
					<li class="divider">
					</li>
					<li>
						<a href="../backend/logout.php">Login Out</a>
					</li>
				</ul>
			</li>
		</ul>
	</div>
</div>
