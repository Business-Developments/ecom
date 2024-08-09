<?php 
//delete page
include_once("../inc_db.php");
$id = $_GET['id'];
$sql = "DELETE FROM `body_product` WHERE `id`='$id'";
$query = mysqli_query($db,$sql);
if ($query) {
	echo "Deleted successfully";
	header("refresh:3;Location:allproduct.php");
}
 ?>