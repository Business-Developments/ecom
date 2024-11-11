<?php include_once("inc_db.php");
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
                <a class="nav-link" href="#you are in home page">Home<span class="sr-only">(current)</span></a>
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
          <i class="fa fa-shopping-cart" style="font-size:30px;color: black;"></i><span style="margin-left: -25px;color:white;background: red;border-radius: 50%;padding: 0 6px;"><?php  if (isset($_SESSION['uname'])) { echo $_SESSION['num'];} ?></span>
        </a>
        &nbsp;
<?php if (isset($_SESSION['uname'])) { $url="customer_logout.php";}else{ $url = "customer.php"; } ?>
        <a href="<?php echo $url; ?>"><?php echo isset($_SESSION['uname']) ? 'Logout' : 'Login'; ?></a>
    </div>
</nav>
       <br><br><br>     <!-- image caeousel / slid product goes start here -->
   <?php
$sqlbody = "SELECT * FROM `slid`";
$bodyQuery = mysqli_query($db, $sqlbody);
?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php 
        $index = 0;
        while ($sliddata = mysqli_fetch_assoc($bodyQuery)) {
            ?>
            <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $index; ?>" class="<?php echo $index === 0 ? 'active' : ''; ?>"></li>
            <?php 
            $index++;
             }
        ?>
    </ol>
    <div class="carousel-inner">
        <?php 
        mysqli_data_seek($bodyQuery, 0); // Reset the pointer to the beginning of the result set
        $first = true; // To mark the first item
        while ($sliddata = mysqli_fetch_assoc($bodyQuery)) {
            ?>
            <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                <img class="d-block w-100" height="350px" src="<?php echo 'admin/' . htmlspecialchars($sliddata['image']); ?>" alt="Slide <?php echo $index; ?>">
            </div>
            <?php 
            $first = false; // After the first iteration
        }
        ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- card goes start from here / body product -->
<div class="container-fluid">
  <div class="row d-flex align-items-center justify-content-center">
<?php 
error_reporting(E_ALL); 
ini_set('display_errors', 1);
$sqlbody="SELECT * FROM `body_product`";
$bodyQuery=mysqli_query($db,$sqlbody);
while ($bodydata=mysqli_fetch_assoc($bodyQuery)) {
    $_SESSION['id']=$bodydata['id'];
    $_SESSION['name']=$bodydata['name'];
    $_SESSION['description']=$bodydata['description'];
    $_SESSION['price']=$bodydata['price'];
    $_SESSION['discount']=$bodydata['discount'];
    $_SESSION['image']=$bodydata['image'];
?>
  <div class="card col-sm-6 col-md-4 col-lg-3 ml-1 mt-1">
    <img src="<?php echo "admin/" . $bodydata['image']; ?>" class="card-img-top" alt="..." width='120px' height='150px'>
    <div class="card-body">
        <h5 class="card-title"><?php echo $_SESSION['name']; ?></h5>
        <p class="card-text"><?php echo $_SESSION['description']; ?></p>
        <a href="buy.php?id=<?php echo $_SESSION['id']; ?>" class="btn btn-primary">Buy Now</a>

        <?php
        // Check if user is logged in
        if (isset($_SESSION['uname']) && isset($_SESSION['mobile'])) {
            // User details are available
            $Uname = $_SESSION['uname'];
            $UID = $_SESSION['mobile'];
            $addToCartLink = "adtocart.php?name=" . $_SESSION['name'] . "&description=" . $_SESSION['description'] . "&image=" . $_SESSION['image'] . "&price=" . $_SESSION['price'] . "&discount=" . $_SESSION['discount'] . "&Uname=" . $Uname . "&UID=" . $UID;
        } else {
            // User is not logged in, redirect to login page $_SERVER['REQUEST_URI']
            $addToCartLink = "customer.php?return_to=" . urlencode($_SESSION['id']);
        }
        ?>
        <a href="<?php echo $addToCartLink; ?>" class="btn btn-primary">
            <?php echo isset($_SESSION['uname']) ? 'Add to Cart' : '<span style="font-size:10px;">Login to Add to Cart'; ?>
        </a>
    </div>
</div>

<?php
echo session_id();
};
 ?>
 </div>
 </div>
<!-- owl carousel / multi slid product -->
<h2 class="text-center text-warning bg-dark mt-2">মাধবী সেলস মার্কেটিং</h2>
<div class="owl-carousel owl-theme">
  <?php
  $image = 1;
  $id='';
  while($id<=10){
 ?>
    <div class="item card">
    <img src="https://via.placeholder.com/300" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card Title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <table>
        <tr>
          <td><a href="#" class="btn btn-primary">Buy now</a></td>
         </tr>   
      </table>
    </div>
  </div>
   <?php $id++; }?> 
</div>
<br><br><br><br>
<!-- this is bootstrap slider -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- owl carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
  var owl = $('.owl-carousel');
owl.owlCarousel({
    items:4,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})
</script>
</body>
</html>