<html>

<link href="../assets/css/style.css" rel="stylesheet" type="text/css" />


<button class="addtopic" onclick="$('.topicform').css('display', 'block'); $('.addtopic').css('display', 'none');">Add topic</button>

<div style="display:none;" class="topicform">
  Add your topic
  <form  name="topicfrom"  method="POST"  onsubmit="myFunction()" >
   <textarea style="width:100%;"rows="4" cols="50"></textarea>
   <input type="submit" value="submit">
   <button type="cancel" value="cancel">cancel</button>
  </form>
</div>


<?php


?>

</html>
