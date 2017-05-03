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
    echo "  <button style='background-color: green' onclick='like(".$row['tid'].");'>Like</button>";
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
   	echo "<div class='topicBox' style='background-color:white;' >";
    echo "  <p>No Comments</p><br>";
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
