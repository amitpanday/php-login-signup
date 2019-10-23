<?php
session_start();
SESSION_DESTROY();
setcookie(email, $email, time() - (86400 * 30));
setcookie(password,$password, time() - (86400 * 30));
header('location:index.php');
?>