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
	<button><a href="../frontend/indexLogedin.php">Go Back</a></button>
	<br/><br/>

		<?php require_once('../backend/comment.php'); ?>

		<br>
		<br>
		<legend>Launch Comment</legend>
		<form action="../frontend/comment.php?tid=<?php echo $tid; ?>" method="post">
	  <p>
				<label for="comment" class="label">Your Comment</label>


<form action="" method="post" name="Message" >
<div class="team_r" style="width:380px">
  <p><img src="../assets/images/images/01.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[-_-] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/02.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[@o@] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/03.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[-|-] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/04.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[o_o] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/05.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[ToT] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/06.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[*_*] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/07.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[-x-] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/08.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[-_-zz] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/09.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[t_t] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/10.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[-_-!] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/11.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[:,] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/12.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[:P] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/13.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[:D] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/14.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[:)] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/15.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[:(] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/16.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[:O] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/17.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[:#] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/18.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[:Z] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/19.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[:0=] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/20.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[/:P] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/21.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[:$] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/22.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[-.-] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/23.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[/-_-] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/24.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[:{] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/25.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[zz] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/26.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[|-_-|] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/27.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[-_-||] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/28.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[:.] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/29.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[:-Q] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/30.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[9_9] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/31.gif" width="20" height="20" onClick="document.forms[0].gb_word.value+='[:,.] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/32.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[:?] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/33.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[:-|] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/34.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[:K] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/35.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[:G] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/36.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[:L] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/37.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[:c] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/38.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[:q] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/39.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[:Y] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/40.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[/gs] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/41.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[/sg] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/42.gif" awidth="20" height="19" onClick="document.forms[0].gb_word.value+='[/hp] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/43.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[/ok] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/44.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[/rain] ';document.forms[0].gb_word.focus()" style="cursor:hand">
      <img src="../assets/images/images/45.gif" width="19" height="19" onClick="document.forms[0].gb_word.value+='[/yin] ';document.forms[0].gb_word.focus()" style="cursor:hand">
    </p>
</div>
  <textarea id="comment" name="comment" type="input" class="input" style="width:100%;"rows="4" cols="50" mce_editable="true" onkeydown=gbcount(this.form.gb_word,this.form.total,this.form.used,this.form.remain); onkeyup=gbcount(this.form.gb_word,this.form.total,this.form.used,this.form.remain);></textarea>

	  <p>
                <input type="submit" name="login" value="Launch Comment" class="left" />
			</p>
		</form>
	</div>
	</div>
</body>
