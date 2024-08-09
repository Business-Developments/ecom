<?php
  session_start();
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  
  $recipientEmail=$_SESSION['email'];  // Use a different variable name for the session email

  //Import PHPMailer classes into the global namespace
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

  //Load Composer's autoloader
  require 'vendor/autoload.php';

  //Create an instance; passing `true` enables exceptions
  $mail = new PHPMailer(true);

  try {
      //Server settings
      //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'loosphp@gmail.com';                    //SMTP username
      $mail->Password   = 'cuju aful hxns kawi';                  //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
      $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
      $rand = rand(1111, 9999);
      //Recipients
      $recipientEmail = $recipientEmail;  // Example recipient email address
      $mail->setFrom('loosphp@gmail.com', 'OTP');
      $mail->addAddress($recipientEmail, 'Subrata');              // Add a recipient

      //Content
      $mail->isHTML(true);                                        //Set email format to HTML
      $mail->Subject = 'This is your one-time password: ' . $rand;
      $mail->Body    = 'Your OTP is <b>' . $rand . '</b>';
      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
      if ($mail->send()) {
        echo ' Otp has been sent to ' . $recipientEmail . " successfully.";
         $_SESSION['otps']=$rand;
         header( "refresh:5;url=enterOtp.php" );
      };
           } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      header( "refresh:1;url=admin.php" );
  }
?>