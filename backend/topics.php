<link href="../assets/css/style.css" rel="stylesheet" type="text/css" />



<button class="addtopic" onclick="$('.topicform').css('display', 'block'); $('.addtopic').css('display', 'none');">Add topic</button>

<div style="display:none;" class="topicform">

  <?php require_once('../backend/addtopic.php'); ?>

  <form  action="index.php" name="topicfrom" id="topicform" method="POST">
   <label for="inputtext" class="label">Add your topic</label>
   <textarea form="topicform" id="inputtext" name="inputtext" style="width:100%;"rows="4" cols="50"></textarea>
   <input type="submit" value="Submit"></input>
   <button type="cancel">Cancel</button>
  </form>
</div>

<?php


  $page = "";

  if (isset($_GET['page']))
  {
    if ($_GET['page'] != "")
    {
      $page = $_GET['page'];
    }
  }

  echo  "( OBS! TO BE REMOVED JUST FOR CONTEXT) page is ".$page."";

  include_once('../database/db_con.php');
  //session_start();

  $sql = 	"SELECT `tid`, `color`, `description`, `like`, `dislike` FROM `topic` ORDER BY tid DESC";

  $result = $con->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<div class='topicBox' style='background-color:".$row["color"].";' >";
      echo "  <p><a href='../frontend/comment.php?tid=".$row['tid']."'>".$row["description"]."</a><br>Likes: <span id='liketid".$row['tid']."'>".$row["like"]."</span> Dislikes: <span id='disliketid".$row['tid']."'>".$row["dislike"]."</span></p>";
      echo "  <button style='background-color: yellow' onclick='like(".$row['tid'].");'>Like</button>";
      echo "  <button style='background-color: red' onclick='dislike(".$row['tid'].");'>Dislike</button>";
      echo "</div>";
    }
  } else {
    echo "No Topics";
  }

?>
