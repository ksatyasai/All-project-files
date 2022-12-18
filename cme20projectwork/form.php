
<?php
$connect=mysqli_connect("localhost","root","","mydatabase");

$name=$_POST['name'];
$rollno=$_POST['rollno'];
$mobileno=$_POST['mobileno'];
$email=$_POST['email'];
$branches=$_POST['branches'];
$select="SELECT * FROM form WHERE `roll_no`='$rollno'";
$check=mysqli_query($connect,$select);
if (mysqli_num_rows($check)>0) {
echo "<script>alert('rollno already registered');window.location.href='form.html'</script>";
}
else{
$sql="INSERT INTO form SET name='$name',roll_no='$rollno',mobileno='$mobileno',email='$email',branches='$branches'";
  
$result=mysqli_query($connect,$sql);
if ($result) {
  echo "<script>alert('data inserted successfully');window.location.href='form.html'</script>";
}
else{
   echo	 "<script>alert('not inserted successfully')</script>";
}
}
?>
