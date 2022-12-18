<?php
include ('connect.php');
$name=$_POST['name'];
$sql="INSERT INTO form ('name') VALUES($name)";
$result=mysqli_query($connect,$sql);
if ($result) {
 echo "<script>alert('data inserted');</script>";
}
else {
 echo "<script>alert('data not inserted');</script>";
}
?>