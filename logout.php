<?php
session_start();
session_unset();
unset($_SESSION['username']);
session_destroy();
header("Location: dance1.php"); 

?>