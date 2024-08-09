<?php 

include_once("../inc_db.php");
$sql = "SELECT `id`, `name`, `description`, `image`, `price`, `discount` FROM `body_product`";
$query = mysqli_query($db,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>All Product of Shop</title>
</head>
<body>
<center>
	<table border="1">
	<tr>
		<td>Photo</td>
		<td>Name</td>
		<td>Description</td>
		<td>Price</td>
		<td>Discount</td>
		<td>Action</td>
	</tr>
	<?php while ($data = mysqli_fetch_assoc($query)) { ?>
	<tr>
			<td><img src="<?php echo $data['image']; ?>" width="20" height="15"></td>
			<td><?php echo $data['name']; ?></td>
			<td><?php echo $data['description']; ?></td>
			<td><?php echo $data['price']; ?></td>
			<td><?php echo $data['discount']; ?></td>
			<td style="padding: 15px;"><a href="Update.php?id=<?php echo $data['id'];?>" style="text-decoration:none;color:wheat;background: teal;padding: 3px;border-radius: 10px;font-weight: bold;">Update</a> | <a href="Delete.php?id=<?php echo $data['id'];?>" style="font-weight: bold;text-decoration:none;color:wheat;background: red;padding: 3px;border-radius: 10px;">Delete</a></td>
	</tr>
			<?php
	
}

 ?>
</table>

</center>
</body>
</html>