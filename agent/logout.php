<?php
$_SESSION = array();
setcookie(session_name(), '', time() - 2592000, '/');
session_destroy();
header("location: \bbit/index.php");
 ?>
