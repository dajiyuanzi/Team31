<h1>Topics</h1>
<?php
  include_once('../database/db_con.php');
  session_start();

  $sql = 	"SELECT `description`, `like`, `dislike` FROM `topic`";

  $result = $con->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "	<p>".$row["description"]."<br>Likes: ".$row["like"]." Dislikes: ".$row["dislike"]."</p>";
    }
  } else {
    echo "No Topics";
  }

?>
