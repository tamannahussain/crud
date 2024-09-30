<?php
$con=mysqli_connect("localhost","root","","crudoperation");
$id=$_GET['id'];
mysqli_query($con,"delete from student where id='$id'");
header('location:index.php');
die();


?>