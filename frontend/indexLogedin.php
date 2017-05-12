<html>
<?php require_once('../public/login_check.php');?>

	<link href="../assets/css/style.css" rel="stylesheet" type="text/css" />
	<?php require_once('../public/head.php'); ?>

	<script type="text/javascript" src="../public/likedislike_ajax.js"></script>
	<body class="bg1">
	<div class="container-fluid">

		<h1 class="title">Super Karlskrona</h1>
		<?php require_once('../public/navLogedin.php'); ?>
		<div class="row-fluid">
			<!--<div class="span2" style="background:yellow;">

			</div>
			<div class="span8">-->
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
			<!--</div>
			<div class="span2" style="background:green;">

			</div>-->
		</div>
	</div>
 <?php include_once 'qtdown.php';?>

	</body>
	<br>
	<br>
	<br>
	<br>
</html>
