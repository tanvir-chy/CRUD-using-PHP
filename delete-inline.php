<?php 
include 'config.php';


 $stu_id = $_GET ['id'];
 
 $sql = "DELETE FROM student WHERE sid = {$stu_id}";
 $result = mysqli_query($conn, $sql) or die ("Query Unsuccessfull.");

 header("location: http://localhost/crud");

 mysqli_close($conn);

 ?>