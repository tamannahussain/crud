<?php
$con=mysqli_connect("localhost","root","","crudoperation");
$res=mysqli_query($con,"select * from student") ;
?>
<a href="add.php" style="color: green;">Add record</a>

<table border="1">
	<tr style="background: orange;border-spacing: 0;">
		<td><b>S.no</b></td>
		<td><b>Name</b></td>
		<td><b>City</b></td>
		<td><b>Status</b></td>
	<?php 
	$i=1;

	while($row=mysqli_fetch_assoc($res)){?> 
		<tr style="background:lightcyan;">
		<td><?php echo $i?></td>
		<td><?php echo $row ['name']?></td>
		<td><?php echo $row ['city']?></td>
		<td style=>
			<a href="update.php?id=<?php echo $row['id']?>">Update</a>&nbsp;
			<a href="delete.php?id=<?php echo $row['id']?>">Delete</a>
		</td>

	</tr>
		<?php
		$i++;
	    }?>
</table>