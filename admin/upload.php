<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once '../inc_db.php'; 

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $discount = $_POST['Discount'];
    $fileTmpName = $_FILES['image']['tmp_name'];
    $fileName = "images/" . basename($_FILES['image']['name']);

    if (move_uploaded_file($fileTmpName, $fileName)) {
        $redirect = $_POST['flexRadioDefault'];
        $table = '';

        if ($redirect === "slide") {
            $table = 'slid';
        } elseif ($redirect === "body") {
            $table = 'body_product';
        } elseif ($redirect === "owl") {
            $table = 'owlCarousel';
        }

        $stmt = $db->prepare("INSERT INTO `$table` (`name`, `description`, `image`, `price`, `discount`) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $description, $fileName, $price, $discount);
        if ($stmt->execute()) {
            echo "Product successfully uploaded<a href='admin_log.php'>Back</a>";
        } else {
            echo "Error: " . $stmt->error;
        }
    } else {
        echo "Error moving the uploaded file.";
    }
} else {
    echo "Please <a href='admin.php'>Login</a> first.";
}
?>
