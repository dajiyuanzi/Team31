
<?php 
include_once('../database/db_con.php');
require_once('../public/login_check.php');

$tid=$_GET['tid'];
$uid=$_SESSION['uid'];
$comment=$_POST['comment'];

$result = $con->query("select comment from comment where tid=".$tid.";");

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      	echo "<div class='topicBox' style='background-color:green;' >";
      	echo "  <p>".$row["comment"]."</p><br>";
      	echo "</div>";
    }
}
else {
   	echo "<div class='topicBox' style='background-color:yellow;' >";
    echo "  <p>No Comment</p><br>";
    echo "</div>";
}

if(isset($_POST['comment'])&&!empty($_POST['comment'])){
	$sql = "INSERT INTO comment(tid, uid, comment) VALUES ('".$tid."', '".$uid."', '".$comment."');";
    if (!$con->query($sql)) {
        echo 'Mysql error: ' . mysql_error();
        exit;
    }
    header("Location:../frontend/comment.php");
}
?>

