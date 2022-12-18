
<?php
$connect=mysqli_connect("localhost","root","","database");
if ($connect) {
	echo "connected";
}
else
{
 echo "notconnected";
}