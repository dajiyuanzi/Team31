<link href="../assets/css/style.css" rel="stylesheet" type="text/css" />
<?php


  $page = "";

  if (isset($_GET['page']))
  {
    if ($_GET['page'] != "")
    {
      $page = $_GET['page'];
    }
  }

  echo  "".$page."";

  include_once('../database/db_con.php');
  session_start();

  $sql = 	"SELECT `color`, `description`, `like`, `dislike` FROM `topic`";

  $result = $con->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<div class='topicBox' style='background-color:".$row["color"].";' >";
      echo "	<p>".$row["description"]."<br>Likes: ".$row["like"]." Dislikes: ".$row["dislike"]."</p>";
      echo "</div>";
    }
  } else {
    echo "No Topics";
  }

?>
