<?php
    error_reporting(0);
    session_start();
    session_unset();
    session_destroy();

    echo "<script> window.alert('You have been logged out.'); 
        window.location='login.php'; </script>";
 ?>
