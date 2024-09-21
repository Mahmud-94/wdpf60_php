<?php
include("config.php");
$did = $_GET['id'];
$sql = "DELETE FROM district WHERE did = {$did}";
$result = mysqli_query($con, $sql);
if($result == true)
{
	$msg="<p class='alert alert-success'>district Deleted</p>";
	header("Location:districtadd.php?msg=$msg");
}
else{
	$msg="<p class='alert alert-warning'>district Not Deleted</p>";
	header("Location:districtadd.php?msg=$msg");
}
mysqli_close($con);
?>
