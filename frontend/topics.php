<h1>Topics</h1>
<?php
  include_once('../database/db_con.php');
  session_start();


  function rand_color() {
    return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
  }

  $sql = 	"SELECT `description`, `like`, `dislike` FROM `topic`";

  $result = $con->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $color = rand_color();
      echo "<div class='topicBox' style='background-color:".$color.";' >";
      echo "	<p>".$row["description"]."<br>Likes: ".$row["like"]." Dislikes: ".$row["dislike"]."</p>";
      echo "</div>";
    }
  } else {
    echo "No Topics";
  }

?>
