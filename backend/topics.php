<link href="../assets/css/style.css" rel="stylesheet" type="text/css" />


<div class="addtopicbutton">
<button class="addtopic" onclick="$('.topicform').css('display', 'block'); $('.addtopicbutton').css('display', 'none');">Add topic</button>
<br><br>
</div>

<div style="display:none;" class="topicform">

  <?php require_once('../backend/addtopic.php'); ?>

  <form  action="index.php" name="topicfrom" id="topicform" method="POST">
   <label for="inputtext" class="label">Add your topic</label>
   <textarea form="topicform" id="inputtext" name="inputtext" style="width:100%;"rows="4" cols="50"></textarea>
   <input type="submit" value="Submit"></input>
   <button type="cancel" onclick="$('.topicform').css('display', 'none'); $('.addtopicbutton').css('display', 'block');">Cancel</button>
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


  include_once('../database/db_con.php');
  //session_start();

  if ($page == "comment") {
    $sql = 	"SELECT topic.tid, topic.color, topic.description, topic.like, topic.dislike, COUNT(COMMENT.tid) AS comments FROM `topic` LEFT JOIN `comment` ON topic.tid = COMMENT.tid GROUP BY topic.tid ORDER BY comments DESC";

    //SELECT `tid`, `color`, `description`, `like`, `dislike` FROM `topic` ORDER BY tid";
  } elseif ($page == "popular") {
    echo"hi";
    $sql = 	"SELECT `tid`, `color`, `description`, `like`, `dislike`, (`like`-`dislike`) FROM `topic` ORDER BY 6 DESC";
  } else {
    $sql = 	"SELECT `tid`, `color`, `description`, `like`, `dislike` FROM `topic` ORDER BY tid DESC";
  }

  //$sql = 	"SELECT `tid`, `color`, `description`, `like`, `dislike` FROM `topic` ORDER BY tid DESC";

  $result = $con->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $popularity = $row["like"] - $row["dislike"];
      echo "<div class='topicBox' style='background-color:".$row["color"].";' >";
      echo "  <p><a href='../frontend/comment.php?tid=".$row['tid']."'>".$row["description"]."</a><br>Likes: <span id='liketid".$row['tid']."'>".$row["like"]."</span> Dislikes: <span id='disliketid".$row['tid']."'>".$row["dislike"]."</span> Popularity: <span id='popularityid".$row['tid']."'>$popularity</span></p>";
      echo "  <button style='background-color: green' onclick='like(".$row['tid'].");'>Like</button>";
      echo "  <button style='background-color: red' onclick='dislike(".$row['tid'].");'>Dislike</button>";
      echo "</div>";
    }
  } else {
    echo "No Topics";
  }

?>
