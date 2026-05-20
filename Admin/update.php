<?php
include "../db Connect/connect.php";

if (isset($_POST["submit"])) {
  $uname = $_POST['username'];
  $pwd = $_POST['password'];

  $sql = "UPDATE `users` SET `username`='$uname',`password`='$pwd' WHERE id = '1'";

  $result = mysqli_query($con, $sql);

  if ($result) {
    echo "Details updated successfully";
    header("Location: panel.php");
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

  <title>Simple Project</title>
</head>

<body>
 <br><br>


    
      
 

    <?php
    $sql = "SELECT * FROM `users` WHERE id = 1 LIMIT 1";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

  <center>  <h3>Update User Information</h3>
      <form action="" method="post">

            <label class="form-label">UserName:</label>
            <input type="text" class="form-control" name="username" value="<?php echo $row['username'] ?>"><br>

            <label class="form-label">Password:</label>
            <input type="password" class="form-control" name="password" value="<?php echo $row['password'] ?>"><br>


          <button type="submit" class="btn btn-success" name="submit">Update</button>
 
      </form>
</center>
</body>
</html>