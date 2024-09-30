<?php
$con=mysqli_connect("localhost","root","","crudoperation");
//$sql= "insert into student(name,city) values('Ahil','Nandgram')";
//$sql="update student set name='Rehan' where id=4";
// $sql="delete from student where id=3";
$sql="select * from student";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($res)){
	echo "<pre>";
	print_r($row);
}
?>