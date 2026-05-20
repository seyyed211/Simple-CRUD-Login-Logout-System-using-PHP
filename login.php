<!DOCTYPE html>
<html lan="en">
   
    <body><H1><center>Simple Student Registration System Using MySQL & PHP
        </center> 
        </H1><center><br><br><br>
      <form class="box" action="" method="POST">
        <h1><u>Admin Login Form</u></h1><br>
          UserName:<input type="text" name="nam" placeholder="Enter Username"><br><br>
          Password:<input type="password" name="pwd" placeholder="Enter Password"><br><br>
          <input type="submit" name="submit" value="Login">
     </form>   </center>   
    </body>
</html>
<?php
include("./db Connect/connect.php");
    session_start();

    if (isset($_POST["nam"],$_POST["pwd"]))
    {
        $username=$_POST["nam"];
        $password=$_POST["pwd"];
        $sql = "SELECT username FROM users WHERE username='$username' and password = '$password'";
        $result=mysqli_query($con,$sql);

        // $row=mysqli_fetch_array($result);
        $count=mysqli_num_rows($result);
        
        if($count==1) {
            $_SESSION['login_user']=$username;
            echo "User Login Successfully";
            header("Location: ./admin/panel.php");
        }else {
            echo '<script language="javascript">';
            echo 'alert("Wrong Username or Password")';
            echo '</script>';
        }
        
    }
?>