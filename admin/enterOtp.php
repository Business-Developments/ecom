<?php 
session_start();
echo $_SESSION['otps'];
if (isset($_POST['submit'])) {
    if ($_SESSION['otps'] == $_POST['eotp']) {
        header("Location: admin_log.php");
        exit();
    } else {
        echo "Invalid OTP!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Enter Otp</title>
</head>
<body>
<form method="POST" action="">
    Enter Otp : <input type="text" name="eotp" placeholder="Enter your Otp !">
    <input type="submit" name="submit" value="submit">
</form>
</body>
</html>

