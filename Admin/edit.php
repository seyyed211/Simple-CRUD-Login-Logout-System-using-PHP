<?php
include "../db Connect/connect.php";
$id = $_GET["upd"];

if (isset($_POST["submit"])) {
  $fname = $_POST['fname'];
  $depart = $_POST['dept'];
  $sem = $_POST['semes'];

  $sql = "UPDATE `students` SET `fullname`='$fname',`department`='$depart',`semester`='$sem' WHERE id = $id";

  $result = mysqli_query($con, $sql);

  if ($result) {
    echo "Student Details updated successfully";
    header("Location: view.php");
  } else {
    echo "Fail!";
  }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
<H1><center>Simple Registration System <a class="btn-ara" href="logout.php">Logout</a></H1></center> <br>
    <a class="btn-ara" href="panel.php">Back to Dashboard</a><br>        
    <div><a href="insert.php">Add Students</a><br><div>
    <div><a href="view.php">View Students</a><br><div>

  <title>Simple Project</title>
</head>

<body>
 <br><br>


    
      
 

    <?php
    $sql = "SELECT * FROM `students` WHERE id = $id LIMIT 1";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

  <center>  <h3>Update Student Information</h3>
      <form action="" method="post" style="width:50vw; min-width:300px;">

            <label class="form-label">Full Name:</label>
            <input type="text" class="form-control" name="fname" value="<?php echo $row['fullname'] ?>"><br>

            <label class="form-label">Department:</label>
            <input type="text" class="form-control" name="dept" value="<?php echo $row['department'] ?>"><br>

          <label class="form-label">Semester:</label>
          <input type="text" class="form-control" name="semes" value="<?php echo $row['semester'] ?>"><br><br>

          <button type="submit" class="btn btn-success" name="submit">Update</button>
 
      </form>
</center>
</body>
</html>