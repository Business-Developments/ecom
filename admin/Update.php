<?php 
include_once("../inc_db.php");
$id = $_GET['id'];
$sql1="SELECT * FROM `body_product`";
// $query=mysqli_query($db,$sql);
// $bodyId=mysqli_fetch_assoc($query);
// echo $dodyId['id'];
/*$sql = "UPDATE `body_product` SET `name`='[value-2]',`description`='[value-3]',`image`='[value-4]',`price`='[value-5]',`discount`='[value-6]' WHERE 1"*/
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Done || মাধবী সেলস মার্কেটিং || Ecommerce Website || Online Store ||</title>
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-dark">
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: coral;">
    <a class="navbar-brand" href="../index.php"> &nbsp;&nbsp;&nbsp; মাধবী সেলস মার্কেটিং</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="form-inline my-2 my-lg-0" action="searchbyCode.php" method="POST">
            <input class="form-control mr-sm-2" type="search" placeholder="Search 360 by code" aria-label="Search" name="search" required>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> &nbsp;&nbsp; 
<a href="admin_logout.php" class="btn btn-outline-success btn-info text-danger">Logout</a>

        &nbsp;
    </div>
</nav>
<br>
<!-- upload products -->
<div class="container mt-5">
  <div class="row">
    <div class="col-md-6 offset-md-3 text-light p-2" style="border:1px solid black; background: gray;">
      <h2 class="mb-4" style="font-weight:bold;">Update Product</h2>
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
                                    <!-- radio button -->
            <!-- end radio button -->
            <!-- product categories --><!-- <br>
            <span style="font-size:20px;color: black;background: white;font-weight: bold;padding:3px;">Select categori:</span>
            <select id="fruits" name="fruits" required class="bg-info text-light p-1" style="font-weight: bold;">
                <option value="apple">Apple</option>
                <option value="banana">Banana</option>
                <option value="orange">Orange</option>
                <option value="grape">Grape</option>
            </select><br> -->
            <!-- end categories -->
          <label for="productName">Product Name</label>
          <input type="text" class="form-control" id="productName" placeholder="<?php echo $dodyId['id']; ?>" name="name" required>
        </div>
        <div class="form-group">
          <label for="productDescription">Product Description</label>
          <textarea class="form-control" id="productDescription" rows="3" placeholder="Enter product description" name="description" required></textarea>
        </div>
        <div class="form-group">
          <label for="productImage">Product Image</label>
          <input type="file" class="form-control-file" id="productImage" name="image" required>
        </div>
        <div class="form-group">
          <label for="productPrice">Product Price</label>
          <input type="number" class="form-control" id="productPrice" placeholder="Enter product price" name="price" required>
        </div>
        <div class="form-group">
          <label for="productPrice">Discount Price</label>
          <input type="number" class="form-control" id="productPrice" placeholder="Enter discount price" name="Discount"> 
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Upload Product</button>
      </form>
    </div>
  </div>
</div>

<!-- bootstrap js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>

