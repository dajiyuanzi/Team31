<link href="../assets/css/style.css" rel="stylesheet" type="text/css" />

<body class="bg1">
	<div class="container-fluid">

		<h1 class="title">Super Karlskrona</h1>

		<?php
			require_once('../public/head.php');
			require_once('../public/navLogedin.php');
			require_once('../public/login_check.php');

			require_once('../backend/tenant.php');
		?>
		<a href="../frontend/indexLogedin.php"><button>Go Back</button></a>
		<div class="row-fluid">
			<div>
				<legend>Applications to your advert</legend>
				<!--<button><a href="../backend/tenant.php?act=close">Colse My Room Sharing</a></button>-->
				<form action="../frontend/tenant.php?act=close" method="post"><input type="submit" value="Grant " /></form>
				<?php
					$sql="select `description`, `contact` from application where rid=(select `rid` from room where uid='".$_SESSION['uid']."');";
					$result=$con->query($sql);

					//Display all available sharings
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()){
							echo "<div class='adBox'>";
							echo "Description: ".$row['description']."<br>Contact: ".$row['contact']."<br></div><br>";
						}
					}
					else{
						echo "<p>No applications yet</p>";
					}

				?>
			</div>
		</div>

	</div>
</body>
