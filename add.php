<?php
$con=mysqli_connect("localhost","root","","crudoperation");
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$city=$_POST['city'];
	mysqli_query($con,"insert into student(name,city) values('$name','$city')");
	header('location:index.php');
	die();
}
?>
<form method="post">
	<table>
		<tr>
			<td>Name</td>
			<td><input type="textbox" name="name"></td>
		</tr>
		<tr>
			<td>City</td>
			<td><input type="textbox" name="city"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit"></td>
		</tr>
	</table>
</form>
