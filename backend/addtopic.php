
<?php
include_once('../database/db_con.php');
//require_once('../public/login_check.php');

//$uid=$_SESSION['uid'];

if(isset($_POST['inputtext'])&&!empty($_POST['inputtext'])){
	$topic=$_POST['inputtext'];

    $con->query("SET @return = ''");

    $sql = "CALL add_topic('" .$topic. "', @result);";
    //echo $sql. "<br>";
    if ($con->query($sql) === TRUE) {

      $select = 'SELECT @result;';
      $res = $con->query($select);
      if ($res->num_rows > 0) {
        while($row = $res->fetch_assoc()) {
          echo "<p> ".$row["@result"]. "</p>";
        }
      } else {
        //echo "Error: " . $select . "<br>" . $con->error;
      }

    } else {
        //echo "Error: " . $sql . "<br>" . $con->error;
    }
}




?>
