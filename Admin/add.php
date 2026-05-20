<?php
include("../db Connect/connect.php");
if(isset($_POST['submit'])) {
    $id=$_POST['index'];
    $fnam=$_POST['fname'];
    $dep=$_POST['dept'];
    $sem=$_POST['semes'];
$query = "INSERT INTO students (sid, fullname, department, semester) VALUES ('$id', '$fnam', '$dep', '$sem')";

if (!mysqli_query($con, $query)) {
    die('An error occurred! Record not added!');
} else {
  echo "Student Added Successfully";
  header("Location: insert.php");
}
}

?>