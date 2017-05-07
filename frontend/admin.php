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

						if ($page == "tenant") {
								$pageTenant = "active";
						}
						else {
							$pageTopic = "active";
						}

						echo
						'<li class="'.$pageTopic.'">
							<a href="../frontend/admin.php">Topic Management</a>
						</li>
						<li class="'.$pageTenant.'">
							<a href="../frontend/admin.php?page=tenant">Tenant Management</a>
						</li>
						';
					?>
				</ul>
			</div>
		</div>


		<div class="row-fluid">
			<!--<form action="index.php"><input type="submit" value="Go back" /></form>-->
			<button><a href="../frontend/index.php">Go Back</a></button>

			<?php
				$page ="";

			    if (isset($_GET['page']))
			    {
			      if ($_GET['page'] != "")
			      {
			        $page = $_GET['page'];
			      }
			    }

			    if($page=='tenant'){
			    	require_once('../frontend/admin_tenant.php');
			    }
			    else{
			    	require_once('../frontend/admin_topic.php');
			    }

			?>

		</div>

	</div>
</body>