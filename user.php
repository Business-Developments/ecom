<?php
session_start();
include_once("inc_db.php");
        $sql = "SELECT * FROM `user`";
        $query = mysqli_query($db,$sql);
        $user = mysqli_fetch_assoc($query);
if ($_POST['name'] === $user['name'] && $_POST['email'] === $user['email']) {
	$_SESSION['uname']=$user['name'];
	$_SESSION['mobile']=$user['mobile'];
	header("Refresh:5; url=index.php");
}else{
	echo "<a href='customer.php'>Register</a>";
}
?>