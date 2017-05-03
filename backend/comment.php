
<?php
include_once('../database/db_con.php');
require_once('../public/login_check.php');

$tid=$_GET['tid'];
$uid=$_SESSION['uid'];

$sql = 	"SELECT `tid`, `color`, `description`, `like`, `dislike` FROM `topic` where tid='".$tid."';";
$color = "";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<div class='topicBox' style='background-color:".$row["color"].";' >";
    echo "  <p><a href='../frontend/comment.php?tid=".$row['tid']."'>".$row["description"]."</a><br>Likes: <span id='liketid".$row['tid']."'>".$row["like"]."</span> Dislikes: <span id='disliketid".$row['tid']."'>".$row["dislike"]."</span></p>";
    echo "  <button style='background-color: yellow' onclick='like(".$row['tid'].");'>Like</button>";
    echo "  <button style='background-color: red' onclick='dislike(".$row['tid'].");'>Dislike</button>";
    echo "</div>";
    $color = $row["color"];
  }
} else {
  echo "Something went wrong!";
}

echo "<br><br><legend>Comments: </legend>";


$result = $con->query("select `comment` from comment where tid='".$tid."';");

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      	echo "<div class='topicBox' style='background-color:$color;' >";
      	echo "  <p>".$_SESSION["username"].":</p><br>";
      	echo "  <p>".$row["comment"]."</p><br>";
      	echo "</div>";
        echo "<br>";
    }
}
else {
   	echo "<div class='topicBox' style='background-color:yellow;' >";
    echo "  <p>No Comment</p><br>";
    echo "</div>";
}

if(isset($_POST['comment'])&&!empty($_POST['comment'])){
	$comment=$_POST['comment'];
	$sql = "INSERT INTO comment(tid, uid, comment) VALUES ('".$tid."', '".$uid."', '".$comment."');";
    if (!$con->query($sql)) {
        echo 'Mysql error: ' . mysql_error();
        exit;
    }
    header("Location:../frontend/comment.php?tid=".$tid."");
}

?>
