<?php
include("../db Connect/connect.php");

    $del=$_GET['del'];
    //SQL query for deletion.
    $sql = "delete from students where id='$del'";

    if (mysqli_query($con, $sql)) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: " . mysqli_error($con);
      }
      
   header("location: view.php");
//$rows=mysql_fetch_assoc($result);

?>