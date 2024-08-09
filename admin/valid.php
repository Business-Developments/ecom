
    <?php include_once("../inc_db.php"); 
session_start();
        $name = mysqli_real_escape_string($db, $_POST['name']);;
        $email = mysqli_real_escape_string($db,$_POST['email']);
$sql = "SELECT `name`, `email` FROM `admin` WHERE `name` = '$name' AND `email` = '$email'";
        $query = mysqli_query($db,$sql);
        $data = mysqli_fetch_assoc($query);
        if ($data['name']===$name && $data['email']===$email){
            $_SESSION['email']=$email;
echo "your email is ".$email." and server email is ".$data['email'];
header( "refresh:1;url=otp.php" );
}else{ echo "please enter valid name and email<a href=admin.php>Go Back</a>"; } 


?>