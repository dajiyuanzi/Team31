<html>
	<link href="../assets/css/style.css" rel="stylesheet" type="text/css" />
	<?php require_once('../public/head.php'); ?>

	<script type="text/javascript">
		function like(tid){
			if (window.XMLHttpRequest)
			{
				// IE7+, Firefox, Chrome, Opera, Safari
				x=new XMLHttpRequest();
			}
			else
			{
				//IE6, IE5
				x=new ActiveXObject("Microsoft.XMLHTTP");
			}
			x.onreadystatechange=function()
			{
				if (x.readyState==4 && x.status==200)
				{
					document.getElementById("liketid"+tid).innerHTML=x.responseText;
				}
			}
			x.open("POST","../backend/like.php",true);
			x.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        	x.send("tid="+tid);
		}

		function dislike(tid){
			if (window.XMLHttpRequest)
			{
				// IE7+, Firefox, Chrome, Opera, Safari
				x=new XMLHttpRequest();
			}
			else
			{
				//IE6, IE5
				x=new ActiveXObject("Microsoft.XMLHTTP");
			}
			x.onreadystatechange=function()
			{
				if (x.readyState==4 && x.status==200)
				{
					document.getElementById("disliketid"+tid).innerHTML=x.responseText;
				}
			}
			x.open("POST","../backend/dislike.php",true);
			x.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        	x.send("tid="+tid);
		}
	</script>

	<body class="bg1">
	<div class="container-fluid">

		<h1 class="title">Super Karlskrona</h1>
		<?php require_once('../public/nav.php'); ?>
		<div class="row-fluid">
			<!--<div class="span2" style="background:yellow;">

			</div>
			<div class="span8">-->
				<?php require_once('../backend/addtopic.php'); ?>
				<?php require_once('../backend/topics.php'); ?>
			<!--</div>
			<div class="span2" style="background:green;">

			</div>-->
		</div>
	</div>
	</body>
	<br>
	<br>
	<br>
	<br>
</html>
