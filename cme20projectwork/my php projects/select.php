<!DOCTYPE html>
<?php
include ('connection.php');
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>selected data</title>
</head>
<body>
<table border="">
	<tr>
		<th>Id</th>
		<th>name</th>
		<th>rollno</th>
		<th>phoneno</th>
		<th>email</th>
		<th>branches</th>
	</tr>
	<?php
   
    $select="SELECT * FROM form";

    $result=mysqli_query($connect,$select);
     $i=0;
    while ($fetch=mysqli_fetch_array($result)) {
    ?>
     <tr>
     	<td><?php echo ++$i; ?></td>
     	<td><?php echo $fetch['name']; ?></td>
     	<td><?php echo $fetch['roll_no']; ?></td>
     	<td><?php echo $fetch['mobileno']; ?></td>
     	<td><?php echo $fetch['email']; ?></td>
     	<td><?php echo $fetch['branches']; ?></td>
     </tr>
    <?php
    }
	?>
</table>
</body>
</html>