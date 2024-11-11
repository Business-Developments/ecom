<?php 
include_once("inc_db.php");
session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>মাধবী সেলস মার্কেটিং || shoping cart ||</title>
 </head>
 <body>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>মাধবী সেলস মার্কেটিং || Ecommerce Website || Online Store ||</title>
	 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php if (isset($_SESSION['uname'])) {
    $uid = $_SESSION['mobile'];
// Use prepared statements
$stmt = $db->prepare("SELECT * FROM `cart` WHERE `UserID` = ?");
$stmt->bind_param("s", $uid); // Assuming $uid is a string
$stmt->execute();
$query = $stmt->get_result();
$num = $query->num_rows;
$_SESSION['num'] = $num;
    ?>
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: coral;">
    <a class="navbar-brand" href="index.php"> &nbsp;&nbsp;&nbsp; মাধবী সেলস মার্কেটিং</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin/admin.php">Admin</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="search.php" method="POST">
            <input class="form-control mr-sm-2" type="search" placeholder="Search product" aria-label="Search" name="search" required>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> &nbsp;&nbsp;&nbsp;
        <a href="cart.php">
          <i class="fa fa-shopping-cart" style="font-size:30px;color: black;"></i><span style="margin-left: -25px;color:white;background: red;border-radius: 50%;padding: 0 6px;margin-top: -25px;"><?php echo $_SESSION['num']; ?></span>
        </a>
        &nbsp;<a href="customer.php">
          <i class="fa-solid fa-user" style="font-size:30px;color: black;"></i>
        </a>
    </div>
</nav>
<br><br><br>
<center> <h1>Hi <span style="color:white;background:blue;"><?php echo $_SESSION['uname']; ?></span> this is Your cart</h1></center>
    <?php
while ($result = $query->fetch_assoc()) {
    /*echo $result['UserID'] . "<br>";*/
?>
<div class="container my-4"> <div class="row"> <div class="col-md-4"> <div class="card"> <img src="<?php echo "admin/".$result['img']; ?>" class="card-img-top" alt="Product Image"> <div class="card-body"> <h5 class="card-title"><?php echo $result['name']; ?></h5> <p class="card-text"><?php $result['description']; ?></p> <p class="card-text"><strong>Price: <?php echo $result['price']; ?></strong></p> <a href="#" class="btn btn-primary">Buy Now</a> </div> </div> </div> </div> </div>
<?php }
$stmt->close();}else{echo "Please Login first";} ?>
 <!-- bootstrap js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 </body>
 </html>