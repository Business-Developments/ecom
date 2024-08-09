<?php
 session_start();
 session_unset();
 session_destroy();
 if (session_status()==PHP_SESSION_NONE) {
    header("Cache-Control: no-cache, no-store must-revalidate");
    header("Pregma: no-cache");
    header("Expires: 0");
     header("Location:admin_log.php");
     exit();
 }else{
    header("Location:admin_log.php");
 }
  ?>