
<?php
include_once('../database/db_con.php');
//require_once('../public/login_check.php');

//$uid=$_SESSION['uid'];

if(isset($_POST['inputtext'])&&!empty($_POST['inputtext'])){
	$topic=$_POST['inputtext'];
	$sql = "INSERT INTO topic(description) VALUES ('".$topic."');";
    if (!$con->query($sql)) {
        echo 'Mysql error: ' . mysql_error();
        exit;
    }
    //header("Location:../frontend/comment.php?tid=".$tid."");
}

?>
