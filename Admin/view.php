<html>
    
  
    <body><H1><center>Simple Registration System <a class="btn-ara" href="logout.php">Logout</a></H1></center> <br>
    <a class="btn-ara" href="panel.php">Back to Dashboard</a><br>        
    <div><a href="insert.php">Add Students</a><br><div>
       

</table>

<table border="1">
    <h4>All Students</h4>
<tr class="header">
<th>S/NO:</th>
<th>Index Number</th>
<th>Full Name</th>
<th>department</th>
<th>Semester</th>

<th style="color: green";>Update</th>
<th style="color: red";>Delete</th>
</tr>
<?php
include "../db Connect/connect.php";

$sel_q = "SELECT id, sid, fullname, department, semester FROM students";
$result = mysqli_query($con, $sel_q);
$total = mysqli_num_rows($result);
$register = mysqli_fetch_assoc($result);
if($register){
    while($data=mysqli_fetch_assoc($result)){
        echo "
        <tr>
        <td>".$data['id']."</td>
        <td>".$data['sid']."</td>
        <td>".$data['fullname']."</td>
        <td>".$data['department']."</td>
        <td>".$data['semester']."</td>
        <td><center><a href='edit.php?upd={$data['id']}''>Edit</td>
        <td><a href='delete.php?del={$data['id']}''>Remove</td> 
        </tr>
        ";
        
    }
}
else{
    echo"No Records Found!";
}
?>
</table>

</table>
    </body>
</html>