<?php
setcookie('user','',time()-3600,'/');
setcookie('admin', 'access', time()-3600,'admin.php');
unset($_COOKIE['user']);
unset($_COOKIE['admin']);
unset($_SESSION['alogin']);
unset($_SESSION['apassword']);
include 'vars.php';
header('Location: registration.php');
exit;
?>