<?php 
session_start();
?>

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
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: coral;">
    <a class="navbar-brand" href="#মাধবী সেলস মার্কেটিং
"> &nbsp;&nbsp;&nbsp; মাধবী সেলস মার্কেটিং</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="../index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Admin</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="search.php" method="POST">
            <input class="form-control mr-sm-2" type="search" placeholder="Search product" aria-label="Search" name="search" required>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> 
    </div>
</nav>
<!-- end nav -->
<br><br><br>
<marquee style="background: coral; color: white;"><h2>মাধবী সেলস মার্কেটিং</h2></marquee>
<br>
<!-- sign_up Form start from here -->
<!-- <div class="container">
  <div class="row ">
    <div class="col-md-5">
      <div class="card mt-5 text-white">
        <div class="card-header" style="background:gray;color: white;">
          Sign Up
        </div>
        <div class="card-body" style="background:teal;">
          <form method="POST" action="signup.php">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" required>
            </div>
            <div class="form-group">
              <label for="mobile">Mobile Number</label>
              <input type="number" class="form-control" id="mobile" placeholder="Enter your mobile number" name="mobile" required>
            </div>
            <div class="form-group">
              <label for="email">E-mail address</label>
              <input type="text" class="form-control" id="email" placeholder="Enter your email id" name="email">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="terms" name="term" value = "1" required>
              <label class="form-check-label" for="terms">I agree to the terms and conditions</label>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Sign Up</button>
            <button type="reset" class="btn btn-primary">Delete</button>
          </form>
        </div>
      </div>
    </div> -->
    <!-- login form -->
    <div class="col-md-5 justify-content-center">
      <div class="card mt-5 text-white">
        <div class="card-header" style="background:gray;color: white;">
          Login
        </div>
        <div class="card-body" style="background:teal;">
          <form method="POST" action="valid.php">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" required>
            </div>
            <div class="form-group">
              <label for="email">E-mail address</label>
              <input type="text" class="form-control" id="email" placeholder="Enter your email id" name="email">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <button type="reset" class="btn btn-primary">Delete</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  <hr>
  <!-- js for bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body></html>