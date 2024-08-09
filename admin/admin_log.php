    <?php 
session_start();
if ($_SESSION['otps']==true) {

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
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link btn btn-outline-success" href="allproduct.php">Show all product<span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="searchbyCode.php" method="POST">
            <input class="form-control mr-sm-2" type="search" placeholder="Search 360 by code" aria-label="Search" name="search" required>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> &nbsp;&nbsp; 
<a href="admin_logout.php" class="btn btn-outline-success btn-info text-light">Logout</a>

        &nbsp;
    </div>
</nav>
<br>
<!-- upload products -->
<div class="container mt-5">
  <div class="row">
    <div class="col-md-3">
        <img src="hi.png" width="100%" height="100%">
    </div>
    <div class="col-md-6 offset-md-3 text-light p-2" style="border:1px solid black; background: gray;">
      <h2 class="mb-4" style="font-weight:bold;">Upload Product</h2>
      <form action="upload.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
                                    <!-- radio button -->

            <div class="form-check bg-dark text-center">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="slide">
                <label class="form-check-label text-info" for="flexRadioDefault1">
                    Slide Products
                </label>
                <input class="form-check-input ml-2" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="body">&nbsp;&nbsp;&nbsp;
                <label class="form-check-label ml-2 text-primary" for="flexRadioDefault1">
                    Body Products
                </label>
                <input class="form-check-input ml-2" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="owl">
                &nbsp;&nbsp;&nbsp;
                <label class="form-check-label ml-2 text-danger" for="flexRadioDefault1">
                    Multi slide
                </label>
        </div>
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
          <input type="text" class="form-control" id="productName" placeholder="Enter product name" name="name" required>
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
<?php }else{
    echo "<a href='admin.php'>Login</a> first!";
} ?>