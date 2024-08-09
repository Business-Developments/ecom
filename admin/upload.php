<?php 
include_once '../inc_db.php'; 
echo "<br>";
if (isset($_POST['submit'])) {
	echo $name = $_POST['name'];
	echo $description = $_POST['description'];
	echo $price = $_POST['price'];
	echo $discount = $_POST['Discount'];
	echo $file = $_FILES['image'];
    echo $fileName = "images/".$file['name'];
    echo $fileTmpName = $file['tmp_name'];
    echo $fileSize = $file['size'];
    echo $fileError = $file['error'];
    echo $fileType = $file['type'];
    echo "<br>";
   $redirect = $_POST['flexRadioDefault'];
   if ($redirect==="slide") {
   	$sql = "INSERT INTO `slid`(`name`, `description`, `image`, `price`, `discount`) VALUES ('$name','$description','$fileName','$price','$discount')";
   	$query = mysqli_query($db,$sql);
   	if ($query) {
   		echo "slid Product successfully uploaded <a href='admin_log.php'>Go back</a>";
   	}
   }elseif ($redirect==="body") {
   	$sql = "INSERT INTO `body_product`(`name`, `description`, `image`, `price`, `discount`) VALUES ('$name','$description','$fileName','$price','$discount')";
   	$query = mysqli_query($db,$sql);
   	if ($query) {
   		echo "Body Product successfully uploaded <a href='admin_log.php'>Go back</a>";
   	}
   }elseif($redirect==="owl"){
   	$sql = "INSERT INTO `owlCarousel`(`name`, `description`, `image`, `price`, `discount`) VALUES ('$name','$description','$fileName','$price','$discount')";
   	$query = mysqli_query($db,$sql);
   	if ($query) {
   		echo "multi-slid Product successfully uploaded <a href='admin_log.php'>Go back</a>";
   	}
   }
}

 ?>