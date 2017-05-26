<html>
<?php require_once('../public/login_check.php');?>

	<link href="../assets/css/style.css" rel="stylesheet" type="text/css" />
	<?php require_once('../public/head.php'); ?>

	<script type="text/javascript" src="../public/likedislike_ajax.js"></script>
	<body class="bg1">

			<img src="../assets/images/header.png" style="height: 170px; width: 100%;">
	<div class="container-fluid">

		<?php require_once('../public/navLogedin.php'); ?>
		<div class="row-fluid">
			<div class="span9">

				<div class="addtopicbutton">
					<button class="addtopic" onClick="$('.topicform').css('display', 'block'); $('.addtopicbutton').css('display', 'none');">Add topic</button>
					<br><br>
				</div>
				<div style="display:none;" class="topicform">

				  	<?php require_once('../backend/addtopic.php'); ?>

				  	<form  action="indexLogedin.php" name="topicfrom" id="topicform" method="POST">
					   <label for="inputtext" class="label">Add your topic</label>
					   <textarea form="topicform" id="inputtext" name="inputtext" style="width:100%;"rows="4" cols="50"></textarea>
					   <input type="submit" value="Submit"></input>
					   <button type="cancel" onClick="$('.topicform').css('display', 'none'); $('.addtopicbutton').css('display', 'block');">Cancel</button>
					</form>
				</div>

				<?php require_once('../backend/topics.php'); ?>


			</div>
			<div class="sidepanel span3">

							<?php
								echo "Today is " . date("l") . " " . date("Y-m-d") . "<br>";
							?>

							<br>
							<a href="https://www.accuweather.com/en/us/new-york-ny/10007/weather-forecast/349727" class="aw-widget-legal">
							<!--
							By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at https://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at https://www.accuweather.com/en/privacy.
							-->
							</a><div id="awcc1495544082354" class="aw-widget-current"  data-locationkey="" data-unit="c" data-language="en-us" data-useip="true" data-uid="awcc1495544082354"></div><script type="text/javascript" src="https://oap.accuweather.com/launch.js"></script>

							<legend>Adverts</legend>



							<div class="addtenantbutton">
								<button class="addtenant" onClick="$('.tenantform').css('display', 'block'); $('.addtenantbutton').css('display', 'none');">Add Advert</button>
								<br><br>
							</div>
							<div style="display:none;" class="tenantform">

									<?php //require_once('../backend/tenant.php'); ?>

									<?php
										$result = $con->query("select * from room where uid='".$_SESSION['uid']."';");
										if($result->num_rows > 0){
											echo "<p>You have published an advert already, check your
											<a href='../frontend/tenant.php'>advert page</a> for more information.</p>";

											$innerbut3 = "$('.tenantform').css('display', 'none'); $('.addtenantbutton').css('display', 'block');";
											$but3 = ' <button onClick="'.$innerbut3.'">Cancel</button><br><br>';
											echo $but3;

										}
										else{
											echo '<form action="../frontend/tenant.php?act=publish" name="tenantfrom" id="tenantform" method="post">
																<p>
																	<label for="description" class="label">Description</label>
																	<textarea form="tenantform" id="description" name="description" style="width:100%;"rows="4" cols="50"></textarea>
																<p/>
																<p>
																	<label for="address" class="label">Address</label>
																	<input type="text" name="address" class="left" />
																<p/>
																<p>
																	<label for="contact" class="label">Contact</label>
																	<input type="text" name="contact"  class="left" />
																<p/>
																<p>
																	<input type="submit" value="Submit" name="publish" class="left" />';

																	$innerbut4 = "$('.tenantform').css('display', 'none'); $('.addtenantbutton').css('display', 'block');";
																	$but4 = " <button type='cancel' onClick='".$innerbut4."'>Cancel</button>";
																	echo $but4;
																echo "
																</p>
											</form>";
										}
									?>




							</div>

							<?php require_once('../backend/advert.php'); ?>

							<br>
							<br>
							<a href="../frontend/tenant.php">Advert page</a>

				</div>

		</div>
	</div>
 <?php include_once 'qtdown.php';?>

	</body>
</html>
