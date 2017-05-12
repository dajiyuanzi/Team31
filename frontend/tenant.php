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
		<button><a href="../frontend/indexLogedin.php">Go Back</a></button>
		<div class="row-fluid">	
			<div class="span6">>
				<legend>Publish A New Room Sharing</legend>
					<?php 
						$result = $con->query("select * from room where uid='".$_SESSION['uid']."';");
						if($result->num_rows > 0){
							echo "<p>You Have Published One Room Sharing Already!!!</p>";
						}
						else{
							require_once("../frontend/tenant_form.php");
						}
					?>		
			</div>
			<div class="span6">>
				<legend>Apply A Room Sharing</legend>
				<form action="../frontend/tenant.php?act=apply" method="post">
					<p>
						<label for="description" class="label">Description</label>
						<input type="text" name="description" value="Description" class="left" />
					<p/>
					<p>
						<label for="contact" class="label">Contact</label>
						<input type="text" name="contact" value="Contact" class="left" />
					<p/>
					<p>
						<label for="rid" class="label">Room ID</label>
						<input type="text" name="rid" value="Room ID" class="left" />
					<p/>
					<p>
						<input type="submit" name="Apply" value="Apply" class="left" />
					</p>
				</form>
			</div>	
		</div>

		<div class="row-fluid">
			<div class="span8">
				<legend>Available Sharing</legend>
				<?php 
					$sql="select `rid`, `address`, `description`, `contact` from room;";
					$result=$con->query($sql);

					//Display all available sharing
					if ($result->num_rows > 0) {
						echo "<table><tr><td>Room ID</td><td>Room Address</td><td>Descriotion</td><td>Contact</td></tr>";
						while($row = $result->fetch_assoc()){
							echo "<tr><td>".$row['rid']."</td><td>".$row['address']."</td><td>".$row['description']."</td><td>".$row['contact']."</td></tr>";
						}
						echo "</table>";
					}
					else{
						echo "<p>No Room Sharing</p>";
					}
				?>
			</div>

			<div class="span4">
				<legend>Applications to Your Sharing</legend>
				<!--<button><a href="../backend/tenant.php?act=close">Colse My Room Sharing</a></button>-->
				<form action="../frontend/tenant.php?act=close" method="post"><input type="submit" value="Granted My Room Sharing" /></form>
				<?php  
					$sql="select `description`, `contact` from application where rid=(select `rid` from room where uid='".$_SESSION['uid']."');";
					$result=$con->query($sql);

					//Display all available sharings
					if ($result->num_rows > 0) {
						echo "<table><tr><td>Descriotion</td><td>Contact</td></tr>";
						while($row = $result->fetch_assoc()){
							echo "<tr><td>".$row['description']."</td><td>".$row['contact']."</td></tr>";
						}
						echo "</table>";
					}
					else{
						echo "<p>No Sharing Application</p>";
					}

				?>
			</div>
		</div>
		
	</div>
</body>
